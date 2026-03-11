# Backup & Restore — USK E-Canteen

> Versi: 2026-03-11 · Basis kode: Phase 25

---

## Ringkasan

Sistem backup otomatis membuat salinan terenkripsi database setiap hari dan
menegakkan kebijakan retensi 14 / 30 / 90 hari.  Restore bersifat **manual**
dan memerlukan persetujuan super admin diikuti eksekusi CLI di server — tidak
ada restore one-click dari browser untuk mencegah eksekusi tidak sengaja.

---

## Arsitektur

```
Scheduler (02:00 WIB)
  └── backup:run --retention=30
        └── BackupService::run()
              ├── dump()            ← mysqldump / SQLite file copy
              ├── encrypt()         ← AES-256-CBC, kunci dari APP_KEY
              ├── Storage::put()    ← storage/app/backups/backup_*.enc
              └── Backup::create()  ← rekam metadata di DB

Scheduler (03:00 WIB)
  └── backup:cleanup
        └── BackupService::cleanup()
              └── hapus file + DB record yang sudah kedaluwarsa
```

### Enkripsi

- **Algoritma:** AES-256-CBC  
- **Kunci:** 32 byte pertama dari app key (`APP_KEY`) setelah di-decode base64  
- **IV:** 16 byte acak per backup (disematkan di awal ciphertext sebelum base64)  
- **Format file:** `base64(IV[16] || AES-encrypted-content)`  
- **Checksum:** SHA-256 dari konten *sebelum* enkripsi — disimpan di kolom `backups.checksum`

### Lokasi File

```
storage/app/backups/
  backup_2026-03-11_020000_mysql.enc
  backup_2026-03-10_020000_mysql.enc
  ...
```

> File ini **tidak** dipush ke Git (`storage/app/` ada di `.gitignore`).  
> Untuk backup offsite, sync folder ini ke S3 / Wasabi / rsync ke server backup setelah setiap backup selesai.

---

## Kebijakan Retensi

| Opsi | Kapan digunakan |
|------|-----------------|
| **14 hari** | Short-term / testing — hapus cepat |
| **30 hari** | Standar, digunakan scheduler harian |
| **90 hari** | Long-term / compliance / keuangan |

Setiap record `Backup` menyimpan `retention_days`. Job `backup:cleanup` yang
berjalan pukul 03:00 menghapus semua record yang `created_at + retention_days < now()`.

---

## Artisan Commands

### Membuat Backup

```bash
# Standar (sinkron, retensi 30 hari)
php artisan backup:run

# Short-term dengan catatan
php artisan backup:run --retention=14 --note="Pre-deployment backup"

# Kirim ke queue (tidak memblokir)
php artisan backup:run --queue
```

### Membersihkan Backup Kedaluwarsa

```bash
php artisan backup:cleanup
```

### Restore Database

```bash
# Lihat info backup dan minta konfirmasi
php artisan backup:restore {backup_id}

# Langsung tanpa konfirmasi (CI/staging)
php artisan backup:restore {backup_id} --force
```

> **Peringatan:** Restore **menimpa seluruh database** dengan snapshot backup.
> Selalu buat backup fresh sebelum melakukan restore.

---

## Prosedur Restore Lengkap

### 1. Identifikasi Backup Target

```bash
# Lihat daftar backup via tinker (atau halaman admin /admin/backups)
php artisan tinker
>>> App\Models\Backup::latest()->get(['id','filename','created_at','retention_days','checksum'])
```

### 2. Verifikasi Integritas

```bash
php artisan backup:restore {id}
# Command akan otomatis menjalankan verify() sebelum eksekusi
# Jika checksum gagal, restore dibatalkan
```

### 3. Buat Backup Terlebih Dahulu (WAJIB)

```bash
php artisan backup:run --retention=14 --note="Pre-restore safety backup"
```

### 4. Notifikasi Tim

Informasikan kepada seluruh admin bahwa layanan akan down sebentar (~30 detik
untuk database kecil, hingga beberapa menit untuk database besar).

### 5. Matikan Queue Workers

```bash
php artisan queue:restart
# Tunggu jobs yang sedang berjalan selesai
```

### 6. Eksekusi Restore

```bash
php artisan backup:restore {backup_id} --force
```

### 7. Verifikasi Pasca-Restore

```bash
php artisan migrate:status
php artisan tinker
>>> App\Models\User::count()
>>> App\Models\Order::count()
```

### 8. Restart Services

```bash
php artisan queue:work --daemon &
php artisan schedule:run  # atau pastikan cron berjalan
```

---

## Admin UI

| Halaman | URL | Aksi |
|---------|-----|------|
| Daftar Backup | `/admin/backups` | Lihat, unduh, hapus, buat manual |
| Permintaan Restore | `/admin/restore-requests` | Ajukan, setujui (super admin), tolak |

**Alur permintaan restore via UI:**

```
Admin biasa  →  POST /admin/restore-requests  →  status: pending
Super admin  →  POST /admin/restore-requests/{id}/approve  →  status: approved
                Response berisi perintah CLI yang harus dijalankan di server
Ops/DevOps   →  ssh ke server → php artisan backup:restore {id} --force
```

---

## Testing di Staging

### Setup

```bash
# 1. Clone / pull kode terbaru ke staging
git pull origin main

# 2. Jalankan migrasi
php artisan migrate --force

# 3. Pastikan storage/app/backups/ dapat ditulis
mkdir -p storage/app/backups
chmod 775 storage/app/backups
```

### Skenario Test

```bash
# --- Test 1: Backup manual ---
php artisan backup:run --retention=14 --note="Staging test"
# Ekspektasi: file .enc muncul di storage/app/backups/
# Ekspektasi: record di tabel backups dengan status=completed

# --- Test 2: Verifikasi checksum ---
php artisan tinker
>>> $b = App\Models\Backup::latest()->first();
>>> app(App\Services\BackupService::class)->verify($b);
# Ekspektasi: true

# --- Test 3: Cleanup ---
# Ubah created_at ke 15 hari lalu
>>> $b->update(['created_at' => now()->subDays(15)]);
>>> app(App\Services\BackupService::class)->cleanup();
# Ekspektasi: 1 (backup dihapus)

# --- Test 4: Restore cycle ---
# 4a. Backup fresh
php artisan backup:run --retention=14 --note="Pre-restore test"

# 4b. Tambahkan data dummy
php artisan tinker
>>> App\Models\User::factory()->create(['name' => 'RestoreTestUser']);

# 4c. Restore ke snapshot sebelum data dummy
php artisan backup:restore {id_backup_step_4a} --force

# 4d. Verifikasi RestoreTestUser tidak ada lagi
php artisan tinker
>>> App\Models\User::where('name','RestoreTestUser')->exists(); // false
```

### PHPUnit

```bash
php artisan test tests/Feature/BackupTest.php
# Ekspektasi: 26 tests, 0 failures
```

---

## Keamanan

| Ancaman | Mitigasi |
|---------|---------|
| File backup dibaca tanpa kunci | AES-256-CBC — tidak dapat dibaca tanpa APP_KEY |
| Restore tidak sengaja | Membutuhkan akses CLI ke server + konfirmasi interaktif |
| Replay attack (file dimodifikasi) | SHA-256 checksum diverifikasi sebelum restore |
| Exposure APP_KEY | Rotasi APP_KEY otomatis membuat backup lama tidak dapat didekripsi — simpan APP_KEY di secret manager |
| File backup hilang | Sinkronkan ke storage offsite (S3/rsync) setelah setiap backup |

> **Catatan:** Jika APP_KEY dirotasi, backup lama **tidak dapat** didekripsi. Pastikan
> menyimpan APP_KEY lama di secure vault jika ada kemungkinan perlu restore dari
> backup yang dibuat sebelum rotasi.

---

## Environment Variables

Tidak ada env var baru yang dibutuhkan — sistem menggunakan `APP_KEY` yang
sudah ada. Untuk MySQL, `DB_HOST`, `DB_PORT`, `DB_USERNAME`, `DB_PASSWORD`,
dan `DB_DATABASE` dibaca dari konfigurasi `config/database.php`.

---

## Konfigurasi Tambahan (Opsional)

Untuk menyimpan backup ke S3, tambahkan di `config/filesystems.php`:

```php
's3-backup' => [
    'driver' => 's3',
    'key'    => env('AWS_ACCESS_KEY_ID'),
    'secret' => env('AWS_SECRET_ACCESS_KEY'),
    'region' => env('AWS_DEFAULT_REGION'),
    'bucket' => env('AWS_BACKUP_BUCKET'),
],
```

Kemudian ubah `Storage::disk('local')` → `Storage::disk('s3-backup')` di `BackupService`.

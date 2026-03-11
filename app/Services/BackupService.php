<?php

namespace App\Services;

use App\Models\Backup;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\Process\Process;

class BackupService
{
    /** Allowed retention values (days) */
    public const RETENTION_OPTIONS = [14, 30, 90];

    // ── Public API ───────────────────────────────────────────────────────────

    /**
     * Dump the current database, encrypt it, persist to storage, and record
     * metadata in the `backups` table.
     */
    public function run(int $retentionDays = 30, ?string $note = null): Backup
    {
        $content = $this->dump();

        return $this->createFromContent($content, $retentionDays, $note);
    }

    /**
     * Create a backup record from already-available SQL content.
     * Useful in tests and for import workflows.
     */
    public function createFromContent(string $content, int $retentionDays = 30, ?string $note = null): Backup
    {
        $checksum = hash('sha256', $content);
        $encrypted = $this->encrypt($content);
        $driver = config('database.default');
        $filename = 'backup_'.now()->format('Y-m-d_His').'_'.$driver.'.enc';
        $path = 'backups/'.$filename;

        Storage::disk('local')->put($path, $encrypted);

        return Backup::create([
            'driver' => $driver,
            'filename' => $filename,
            'disk_path' => $path,
            'size_bytes' => strlen($encrypted),
            'checksum' => $checksum,
            'retention_days' => $retentionDays,
            'status' => 'completed',
            'note' => $note,
        ]);
    }

    /**
     * Verify that an existing backup file matches its stored checksum.
     */
    public function verify(Backup $backup): bool
    {
        if (! Storage::disk('local')->exists($backup->disk_path)) {
            return false;
        }

        try {
            $encrypted = Storage::disk('local')->get($backup->disk_path);
            $decrypted = $this->decrypt((string) $encrypted);

            return hash('sha256', $decrypted) === $backup->checksum;
        } catch (\Throwable) {
            return false;
        }
    }

    /**
     * Delete all backups whose retention window has expired.
     *
     * @return int Number of backups removed.
     */
    public function cleanup(): int
    {
        $deleted = 0;

        Backup::where('status', 'completed')
            ->get()
            ->filter(fn (Backup $b) => $b->isExpired())
            ->each(function (Backup $backup) use (&$deleted) {
                Storage::disk('local')->delete($backup->disk_path);
                $backup->delete();
                $deleted++;
            });

        return $deleted;
    }

    /**
     * Decrypt a backup and restore the database.
     * Only call this after verify() returns true.
     *
     * @throws \RuntimeException
     */
    public function restore(Backup $backup): void
    {
        $driver = config('database.default');

        if ($driver !== $backup->driver) {
            throw new \RuntimeException(
                "Driver mismatch: backup is [{$backup->driver}], current connection is [{$driver}]."
            );
        }

        if (! Storage::disk('local')->exists($backup->disk_path)) {
            throw new \RuntimeException("Backup file not found: {$backup->disk_path}");
        }

        $encrypted = (string) Storage::disk('local')->get($backup->disk_path);
        $content = $this->decrypt($encrypted);

        if ($driver === 'sqlite') {
            $dbPath = config('database.connections.sqlite.database');
            if ($dbPath === ':memory:') {
                throw new \RuntimeException('Cannot restore to an in-memory SQLite database.');
            }
            file_put_contents($dbPath, $content);

            return;
        }

        // MySQL / other PDO drivers — execute as raw SQL
        DB::unprepared($content);
    }

    // ── Cryptography ─────────────────────────────────────────────────────────

    /**
     * Encrypt plaintext with AES-256-CBC, prepend the IV, and base64-encode
     * the result.  The encryption key is derived from APP_KEY.
     */
    public function encrypt(string $data): string
    {
        $key = $this->encryptionKey();
        $iv = random_bytes(16);
        $encrypted = openssl_encrypt($data, 'aes-256-cbc', $key, OPENSSL_RAW_DATA, $iv);

        if ($encrypted === false) {
            throw new \RuntimeException('Encryption failed.');
        }

        return base64_encode($iv.$encrypted);
    }

    /**
     * Decode and decrypt a value previously encrypted with encrypt().
     *
     * @throws \RuntimeException on decryption failure.
     */
    public function decrypt(string $ciphertext): string
    {
        $decoded = base64_decode($ciphertext, true);
        if ($decoded === false) {
            throw new \RuntimeException('Invalid base64 ciphertext.');
        }

        $iv = substr($decoded, 0, 16);
        $encrypted = substr($decoded, 16);
        $decrypted = openssl_decrypt($encrypted, 'aes-256-cbc', $this->encryptionKey(), OPENSSL_RAW_DATA, $iv);

        if ($decrypted === false) {
            throw new \RuntimeException('Decryption failed — wrong key or corrupted backup file.');
        }

        return $decrypted;
    }

    // ── Internals ────────────────────────────────────────────────────────────

    /**
     * Dump the active database to a SQL / binary string.
     *
     * - SQLite : binary file copy
     * - MySQL  : mysqldump output
     *
     * @throws \RuntimeException if driver unsupported or dump fails.
     */
    protected function dump(): string
    {
        $driver = config('database.default');

        if ($driver === 'sqlite') {
            $path = config('database.connections.sqlite.database');
            if ($path === ':memory:') {
                throw new \RuntimeException(
                    'Cannot backup an in-memory SQLite database. Use a file-based DB_DATABASE path.'
                );
            }
            $content = file_get_contents($path);
            if ($content === false) {
                throw new \RuntimeException("Cannot read SQLite database file: {$path}");
            }

            return $content;
        }

        if ($driver === 'mysql') {
            $c = config('database.connections.mysql');
            $process = new Process([
                'mysqldump',
                '-h', $c['host'],
                '-P', (string) $c['port'],
                '-u', $c['username'],
                '--password='.$c['password'],
                '--single-transaction',
                '--routines',
                '--triggers',
                '--set-gtid-purged=OFF',
                $c['database'],
            ]);
            $process->setTimeout(300);
            $process->run();

            if (! $process->isSuccessful()) {
                throw new \RuntimeException('mysqldump failed: '.$process->getErrorOutput());
            }

            return $process->getOutput();
        }

        throw new \RuntimeException("Unsupported database driver for backup: {$driver}");
    }

    /** 32-byte AES key derived from the application APP_KEY. */
    private function encryptionKey(): string
    {
        $appKey = (string) config('app.key');
        if (str_starts_with($appKey, 'base64:')) {
            $decoded = base64_decode(substr($appKey, 7), true);
            if ($decoded !== false && strlen($decoded) >= 32) {
                return substr($decoded, 0, 32);
            }
        }

        // Fallback: SHA-256 hash of the raw key (32 bytes)
        return substr(hash('sha256', $appKey, true), 0, 32);
    }
}

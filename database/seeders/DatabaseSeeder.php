<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            UserSeeder::class,       // admin, siswa, guru
            CategorySeeder::class,   // kategori menu
            BreakTimeSeeder::class,  // jadwal istirahat
            MenuSeeder::class,       // menu (butuh category_id → harus setelah CategorySeeder)
        ]);
    }
}

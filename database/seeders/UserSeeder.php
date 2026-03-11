<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // ── Admin ─────────────────────────────────────────────────────────────
        User::create([
            'name' => 'Admin Kantin',
            'email' => 'admin@ecanteen.test',
            'password' => Hash::make('password'),
            'role' => 'admin',
            'balance' => 0,
        ]);

        // ── Siswa ─────────────────────────────────────────────────────────────
        $students = [
            ['name' => 'Andi Kurniawan',   'email' => 'andi@ecanteen.test',    'balance' => 50000],
            ['name' => 'Budi Santoso',     'email' => 'budi@ecanteen.test',    'balance' => 25000],
            ['name' => 'Citra Dewi',       'email' => 'citra@ecanteen.test',   'balance' => 75000],
            ['name' => 'Deni Firmansyah',  'email' => 'deni@ecanteen.test',    'balance' => 10000],
            ['name' => 'Eka Rahayu',       'email' => 'eka@ecanteen.test',     'balance' => 100000],
        ];

        foreach ($students as $student) {
            User::create([
                'name' => $student['name'],
                'email' => $student['email'],
                'password' => Hash::make('password'),
                'role' => 'student',
                'balance' => $student['balance'],
            ]);
        }

        // ── Guru ──────────────────────────────────────────────────────────────
        $teachers = [
            ['name' => 'Pak Hendra Wijaya',  'email' => 'hendra@ecanteen.test',  'balance' => 150000],
            ['name' => 'Bu Siti Aminah',     'email' => 'siti@ecanteen.test',    'balance' => 200000],
        ];

        foreach ($teachers as $teacher) {
            User::create([
                'name' => $teacher['name'],
                'email' => $teacher['email'],
                'password' => Hash::make('password'),
                'role' => 'teacher',
                'balance' => $teacher['balance'],
            ]);
        }
    }
}

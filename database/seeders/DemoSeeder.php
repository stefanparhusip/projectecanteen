<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Menu;
use App\Models\User;
use App\Services\DemoModeService;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DemoSeeder extends Seeder
{
    public function run(): void
    {
        // ── Categories (idempotent — use existing or create) ─────────────────
        $food   = Category::firstOrCreate(['name' => 'Makanan Berat']);
        $snack  = Category::firstOrCreate(['name' => 'Makanan Ringan']);
        $drink  = Category::firstOrCreate(['name' => 'Minuman']);

        // ── Demo Admin ───────────────────────────────────────────────────────
        User::withTrashed()->where('email', 'demo-admin' . DemoModeService::DEMO_EMAIL_DOMAIN)->forceDelete();
        User::create([
            'name'     => '[Demo] Admin Kantin',
            'email'    => 'demo-admin' . DemoModeService::DEMO_EMAIL_DOMAIN,
            'password' => Hash::make('Demo@1234'),
            'role'     => 'admin',
            'balance'  => 0,
        ]);

        // ── Demo Students ────────────────────────────────────────────────────
        $students = [
            ['name' => '[Demo] Andi',  'email' => 'demo-andi'  . DemoModeService::DEMO_EMAIL_DOMAIN, 'balance' => 50000],
            ['name' => '[Demo] Budi',  'email' => 'demo-budi'  . DemoModeService::DEMO_EMAIL_DOMAIN, 'balance' => 25000],
            ['name' => '[Demo] Citra', 'email' => 'demo-citra' . DemoModeService::DEMO_EMAIL_DOMAIN, 'balance' => 75000],
        ];

        foreach ($students as $s) {
            User::withTrashed()->where('email', $s['email'])->forceDelete();
            User::create(array_merge($s, [
                'password' => Hash::make('Demo@1234'),
                'role'     => 'student',
            ]));
        }

        // ── Demo Menus ───────────────────────────────────────────────────────
        $menus = [
            [
                'category_id'   => $food->id,
                'name'          => DemoModeService::DEMO_MENU_PREFIX . ' Nasi Goreng',
                'price'         => 12000,
                'stock'         => 20,
                'default_stock' => 20,
            ],
            [
                'category_id'   => $food->id,
                'name'          => DemoModeService::DEMO_MENU_PREFIX . ' Mie Ayam',
                'price'         => 10000,
                'stock'         => 15,
                'default_stock' => 15,
            ],
            [
                'category_id'   => $food->id,
                'name'          => DemoModeService::DEMO_MENU_PREFIX . ' Nasi Uduk',
                'price'         => 11000,
                'stock'         => 0,
                'default_stock' => 10,
            ],
            [
                'category_id'   => $snack->id,
                'name'          => DemoModeService::DEMO_MENU_PREFIX . ' Risoles',
                'price'         => 3000,
                'stock'         => 30,
                'default_stock' => 30,
            ],
            [
                'category_id'   => $snack->id,
                'name'          => DemoModeService::DEMO_MENU_PREFIX . ' Gorengan',
                'price'         => 2000,
                'stock'         => 50,
                'default_stock' => 50,
            ],
            [
                'category_id'   => $drink->id,
                'name'          => DemoModeService::DEMO_MENU_PREFIX . ' Es Teh',
                'price'         => 3000,
                'stock'         => 40,
                'default_stock' => 40,
            ],
            [
                'category_id'   => $drink->id,
                'name'          => DemoModeService::DEMO_MENU_PREFIX . ' Jus Jeruk',
                'price'         => 5000,
                'stock'         => 20,
                'default_stock' => 20,
            ],
            [
                'category_id'   => $drink->id,
                'name'          => DemoModeService::DEMO_MENU_PREFIX . ' Air Mineral',
                'price'         => 2000,
                'stock'         => 60,
                'default_stock' => 60,
            ],
        ];

        foreach ($menus as $menu) {
            Menu::withTrashed()
                ->where('name', $menu['name'])
                ->forceDelete();
            Menu::create($menu);
        }

        $this->command?->info('Demo data seeded: 4 users, 8 menus.');
    }
}

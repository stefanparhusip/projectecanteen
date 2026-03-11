<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Menu;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    public function run(): void
    {
        // Ambil ID kategori berdasarkan nama (sudah di-seed oleh CategorySeeder)
        $catId = Category::pluck('id', 'name');

        $menus = [
            // ── Makanan Berat ─────────────────────────────────────────────────
            [
                'category_id' => $catId['Makanan Berat'],
                'name' => 'Nasi Goreng Spesial',
                'price' => 12000,
                'stock' => 20,
            ],
            [
                'category_id' => $catId['Makanan Berat'],
                'name' => 'Nasi Ayam Geprek',
                'price' => 13000,
                'stock' => 15,
            ],
            [
                'category_id' => $catId['Makanan Berat'],
                'name' => 'Mie Ayam Bakso',
                'price' => 10000,
                'stock' => 20,
            ],
            [
                'category_id' => $catId['Makanan Berat'],
                'name' => 'Lontong Sayur',
                'price' => 9000,
                'stock' => 0, // contoh menu habis
            ],

            // ── Makanan Ringan ────────────────────────────────────────────────
            [
                'category_id' => $catId['Makanan Ringan'],
                'name' => 'Risoles Mayo',
                'price' => 3000,
                'stock' => 30,
            ],
            [
                'category_id' => $catId['Makanan Ringan'],
                'name' => 'Gorengan (3 pcs)',
                'price' => 2000,
                'stock' => 50,
            ],
            [
                'category_id' => $catId['Makanan Ringan'],
                'name' => 'Pastel Isi Sayur',
                'price' => 3000,
                'stock' => 25,
            ],

            // ── Minuman ───────────────────────────────────────────────────────
            [
                'category_id' => $catId['Minuman'],
                'name' => 'Es Teh Manis',
                'price' => 3000,
                'stock' => 50,
            ],
            [
                'category_id' => $catId['Minuman'],
                'name' => 'Es Jeruk',
                'price' => 4000,
                'stock' => 30,
            ],
            [
                'category_id' => $catId['Minuman'],
                'name' => 'Jus Alpukat',
                'price' => 7000,
                'stock' => 20,
            ],
            [
                'category_id' => $catId['Minuman'],
                'name' => 'Air Mineral Botol',
                'price' => 3000,
                'stock' => 100,
            ],

            // ── Dessert ───────────────────────────────────────────────────────
            [
                'category_id' => $catId['Dessert'],
                'name' => 'Puding Coklat',
                'price' => 4000,
                'stock' => 20,
            ],
            [
                'category_id' => $catId['Dessert'],
                'name' => 'Es Krim Cone',
                'price' => 5000,
                'stock' => 15,
            ],
        ];

        foreach ($menus as $menu) {
            Menu::create($menu);
        }
    }
}

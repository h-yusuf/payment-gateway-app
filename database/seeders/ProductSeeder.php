<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\User;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Ambil user dengan role 'penjual'
        $penjual = User::where('role', 'penjual')->first();

        if ($penjual) {
            Product::create([
                'name' => 'Produk A',
                'description' => 'Deskripsi produk A',
                'price' => 100000,
                'user_id' => $penjual->id,
            ]);

            Product::create([
                'name' => 'Produk B',
                'description' => 'Deskripsi produk B',
                'price' => 150000,
                'user_id' => $penjual->id,
            ]);
        }
    }
}

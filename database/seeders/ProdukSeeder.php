<?php

namespace Database\Seeders;

use App\Models\Produk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'nama_produk' => 'Chicken Wings',
                'harga' => '20.000',
                'stok' => '15',
            ],
            [
                'nama_produk' => 'Chicken Stripes',
                'harga' => '10.000',
                'stok' => '15',
            ],
            [
                'nama_produk' => 'Chicken Soto',
                'harga' => '12.000',
                'stok' => '15',
            ],
        ];
        foreach ($products as $product) {
            Produk::create($product);
        }
    }
}

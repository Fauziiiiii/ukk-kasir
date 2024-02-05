<?php

namespace Database\Seeders;

use App\Models\Paket;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $paketData = [
            [
                'id_outlet' => '1',
                'jenis' => 'kiloan',
                'nama_paket' => 'paket 1',
                'harga' => 10000,
            ],
            [
                'id_outlet' => '2',
                'jenis' => 'selimut',
                'nama_paket' => 'paket 2',
                'harga' => 12000,
            ],
            [
                'id_outlet' => '3',
                'jenis' => 'bed_cover',
                'nama_paket' => 'paket 3',
                'harga' => 12000,
            ],
        ];

        foreach($paketData as $item){
            Paket::create($item);
        }
        
        
    }
}

<?php

namespace Database\Seeders;

use App\Models\Outlet;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OutletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $outletData = [
            [
                'nama' => 'Brantas Laundry',
                'alamat' => 'Lolaras',
                'tlp' => '081223344'
            ],
            [
                'nama' => 'Jarno Laundry',
                'alamat' => 'Dawung',
                'tlp' => '08122333'
            ],
            [
                'nama' => 'Suwito Laundry',
                'alamat' => 'Slorok',
                'tlp' => '0813333444'
            ],
        ];

        foreach($outletData as $item){
            Outlet::create($item);
        }
    }
}

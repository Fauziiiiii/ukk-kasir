<?php

namespace Database\Seeders;

use App\Models\Outlet;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class tb_outlet extends Seeder
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
                'alamat' => 'Malang',
                'tlp' => '08132224993',
            ],
            [
                'nama' => 'Jarno Laundry',
                'alamat' => 'Etan mejid',
                'tlp' => '08132224993',
            ],
            [
                'nama' => 'Suwito Laundry',
                'alamat' => 'Slorok',
                'tlp' => '08132224993',
            ],
        ];

        foreach ($outletData as $key => $value) {
            Outlet::create($value);
        }
    }
}

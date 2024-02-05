<?php

namespace Database\Seeders;

use App\Models\Pelanggan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'nama_pelanggan' => 'Fauzi 22',
                'alamat' => 'Malang',
                'nomor_telepon' => '0812994849322',
            ],
            [
                'nama_pelanggan' => 'Fadhil 33',
                'alamat' => 'Semarang',
                'nomor_telepon' => '0898838849839',
            ],
            [
                'nama_pelanggan' => 'Erik Fransissco',
                'alamat' => 'Jatiguwi',
                'nomor_telepon' => '0817988398489',
            ],
        ];
        foreach ($users as $user) {
            Pelanggan::create($user);
        }
    }
}

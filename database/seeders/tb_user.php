<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class tb_user extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userData = [
            [
                'nama' => 'Fauzi',
                'username' => 'uzz.z',
                'password' => bcrypt('123456'),
                'id_outlet' => 1,
                'role' => 'admin',
            ]
        ] ;

        User::create($userData);
    }
}

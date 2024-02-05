<?php

namespace Database\Seeders;

use App\Models\User2 as ModelsUser2;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class user2 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            // [
            //     'nama' => 'Fauzi',
            //     'username' => 'uzz.zz',
            //     'password'=> bcrypt('123456'),
            //     'role' => 'admin',
            // ],
            [
                'nama' => 'Fadhil',
                'username' => 'fadhil',
                'password'=> bcrypt('123456'),
                'role' => 'petugas',
            ],
        ];
        foreach ($users as $user) {
            ModelsUser2::create($user);
        }
    }
}

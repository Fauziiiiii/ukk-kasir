<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
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
                'nama' => 'Fauzi',
                'username' => 'uzz.zz',
                'email' => 'fauzi@gmail.com',
                'password'=> bcrypt('123456'),
                'id_outlet' => '1',
                'role' => 'admin',
            ],
            [
                'nama' => 'Fadhil',
                'username' => 'fadhil',
                'email' => 'fadhil@gmail.com',
                'password'=> bcrypt('123456'),
                'id_outlet' => '1',
                'role' => 'kasir',
            ],
            [
                'nama' => 'Miselan',
                'username' => 'mslnOK123',
                'email' => 'miselan@gmail.com',
                'password'=> bcrypt('123456'),
                'id_outlet' => '2',
                'role' => 'owner',
            ],
        ];
        foreach ($users as $user) {
            User::create($user);
        }
    }
}

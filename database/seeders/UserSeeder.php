<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = ([
            [
                'nama' => 'Abdul Walid',
                'generasi' => 'XX',
                'email' => 'walid.lonjer@gmail.com',
                'password' => Hash::make('123123'),
                'avatar' => 'img/profil.jpg',
                'role_id' => 1
            ],
            [
                'nama' => 'Asril Hidayat',
                'generasi' => 'XXI',
                'email' => 'asril.code404@gmail.com',
                'password' => Hash::make('111111'),
                'avatar' => 'img/team-1.jpg',
            ]
        ]);

        foreach($users as $user){
            User::create($user);
        }
    }
}

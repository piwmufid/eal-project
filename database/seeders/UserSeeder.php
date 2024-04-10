<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $img = Storage::name('img/profil.jpg');
        $users = ([
            [
                'nama' => 'Abdul Walid',
                'generasi' => 'XX',
                'email' => 'walid.lonjer@gmail.com',
                'password' => Hash::make('123123'),
                'avatar' => $img,
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

<?php

namespace Database\Seeders;

use App\Models\Roles;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            [
                'nama_role' => 'Admin'
            ],
            [
                'nama_role' => 'User',
            ]
        ];

        foreach($roles as $role){
            Roles::create($role);
        }
    }
}

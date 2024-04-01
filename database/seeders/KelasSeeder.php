<?php

namespace Database\Seeders;

use App\Models\Kelas;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelas = [
            [
                'nama_kelas' => 'Speaking Class'
            ],
            [
                'nama_kelas' => 'Listening Class'
            ],
            [
                'nama_kelas' => 'Reading Class'
            ],
            [
                'nama_kelas' => 'Translation Class'
            ]
        ];
        
        foreach($kelas as $value){
            Kelas::create($value);
        }
    }
}

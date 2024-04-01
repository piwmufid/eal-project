<?php

namespace Database\Seeders;

use App\Models\Buku;
use App\Models\Kelas;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelas = Kelas::all();
        $speaking = $kelas[0]->id;
        $listening = $kelas[1]->id;
        $reading = $kelas[2]->id;
        $translation = $kelas[3]->id;
        $buku = [
            [
                'nama_buku' => "Speaking Book 1",
                'id_kelas' => $speaking,
                'harga' => 15000,
                'src' => 'kelas/speaking/speaking_book_1.pdf',
                'kategori' => 'speaking'
            ],
            [
                'nama_buku' => "Speaking Book 2",
                'id_kelas' => $speaking,
                'harga' => 30000,
                'src' => 'kelas/speaking/speaking_book_2.pdf',
                'kategori' => 'speaking'
            ],
            [
                'nama_buku' => "Irregular Verbs",
                'id_kelas' => $speaking,
                'harga' => 35000,
                'src' => 'kelas/speaking/irregular_verbs.pdf',
                'kategori' => 'speaking'
            ],
            [
                'nama_buku' => "British Council Book",
                'id_kelas' => $listening,
                'harga' => 20000,
                'src' => '#',
                'kategori' => 'listening'
            ],
            [
                'nama_buku' => "A Guide of Grammar Comprehension",
                'id_kelas' => $reading,
                'harga' => 25000,
                'src' => 'kelas/reading/grammar_book_1_2.pdf',
                'kategori' => 'reading'
            ],
            [
                'nama_buku' => "Modern English",
                'id_kelas' => $reading,
                'harga' => 70000,
                'src' => '#',
                'kategori' => 'reading'
            ],
            [
                'nama_buku' => "Practical English Usage",
                'id_kelas' => $reading,
                'harga' => 90000,
                'src' => '#',
                'kategori' => 'reading'
            ],
            [
                'nama_buku' => "Reading Texts",
                'id_kelas' => $reading,
                'harga' => 5000,
                'src' => '#',
                'kategori' => 'reading'
            ],
            [
                'nama_buku' => "Be Familiar with English Translation",
                'id_kelas' => $translation,
                'harga' => 12000,
                'src' => 'kelas/translation/translation_book.pdf',
                'kategori' => 'translation'
            ],
            [
                'nama_buku' => "How to Write English",
                'id_kelas' => $translation,
                'harga' => 15000,
                'src' => 'kelas/translation/writting_book.pdf',
                'kategori' => 'translation'
            ],
            [
                'nama_buku' => "Let's Write English",
                'id_kelas' => $translation,
                'harga' => 50000,
                'src' => '#',
                'kategori' => 'translation'
            ],
        ];

        foreach($buku as $value){
            Buku::create($value);
        }
    }
}

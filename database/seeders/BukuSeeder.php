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
                'src' => 'G:\EAL\B U K U  E A L\SPEAKING/Speaking_Book_1.pdf',
                'kategori' => 'speaking'
            ],
            [
                'nama_buku' => "Speaking Book 2",
                'id_kelas' => $speaking,
                'harga' => 30000,
                'src' => 'G:\EAL\B U K U  E A L\SPEAKING/Speaking_Book_1.pdf',
                'kategori' => 'speaking'
            ],
            [
                'nama_buku' => "Irregular Verbs",
                'id_kelas' => $speaking,
                'harga' => 35000,
                'src' => 'G:\EAL\B U K U  E A L\SPEAKING/Speaking_Book_1.pdf',
                'kategori' => 'speaking'
            ],
            [
                'nama_buku' => "English-Indo Dict.",
                'id_kelas' => $speaking,
                'harga' => 100000,
                'src' => 'G:\EAL\B U K U  E A L\SPEAKING/Speaking_Book_1.pdf',
                'kategori' => 'speaking'
            ],
            [
                'nama_buku' => "Indo-English Dict.",
                'id_kelas' => $speaking,
                'harga' => 100000,
                'src' => 'G:\EAL\B U K U  E A L\SPEAKING/Speaking_Book_1.pdf',
                'kategori' => 'speaking'
            ],
            [
                'nama_buku' => "Oxford Learner's Pocket Dict.",
                'id_kelas' => $speaking,
                'harga' => 75000,
                'src' => 'G:\EAL\B U K U  E A L\SPEAKING/Speaking_Book_1.pdf',
                'kategori' => 'speaking'
            ],
            [
                'nama_buku' => "British Council Book",
                'id_kelas' => $listening,
                'harga' => 20000,
                'src' => 'G:\EAL\B U K U  E A L\ir PACK/perfect.pdf',
                'kategori' => 'listening'
            ],
            [
                'nama_buku' => "Hand Book of Reading",
                'id_kelas' => $reading,
                'harga' => 25000,
                'src' => 'G:\EAL\B U K U  E A L\READING/Grammar_Book_1_2.pdf',
                'kategori' => 'reading'
            ],
            [
                'nama_buku' => "Modern English",
                'id_kelas' => $reading,
                'harga' => 70000,
                'src' => 'G:\EAL\B U K U  E A L\READING/Grammar_Book_1_2.pdf',
                'kategori' => 'reading'
            ],
            [
                'nama_buku' => "Practical English Usage",
                'id_kelas' => $reading,
                'harga' => 90000,
                'src' => 'G:\EAL\B U K U  E A L\READING/Grammar_Book_1_2.pdf',
                'kategori' => 'reading'
            ],
            [
                'nama_buku' => "Reading Texts",
                'id_kelas' => $reading,
                'harga' => 5000,
                'src' => 'G:\EAL\B U K U  E A L\READING/Grammar_Book_1_2.pdf',
                'kategori' => 'reading'
            ],
            [
                'nama_buku' => "Be Familiar with English Translation",
                'id_kelas' => $translation,
                'harga' => 12000,
                'src' => 'G:\EAL\B U K U  E A L\TRANSLATION/TRANSLATION_BOOK.pdf',
                'kategori' => 'translation'
            ],
            [
                'nama_buku' => "How to Write",
                'id_kelas' => $translation,
                'harga' => 15000,
                'src' => 'G:\EAL\B U K U  E A L\TRANSLATION/TRANSLATION_BOOK.pdf',
                'kategori' => 'translation'
            ],
            [
                'nama_buku' => "Let's Write English",
                'id_kelas' => $translation,
                'harga' => 50000,
                'src' => 'G:\EAL\B U K U  E A L\TRANSLATION/TRANSLATION_BOOK.pdf',
                'kategori' => 'translation'
            ],
        ];

        foreach($buku as $value){
            Buku::create($value);
        }
    }
}

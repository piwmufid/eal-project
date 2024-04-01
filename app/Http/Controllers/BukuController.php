<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreBukuRequest;
use App\Http\Requests\UpdateBukuRequest;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBukuRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Buku $buku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Buku $buku)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBukuRequest $request, Buku $buku)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Buku $buku)
    {
        //
    }

    public function speaking()
    {
        $books = Buku::where('kategori', '=', 'speaking')->get();
        $kelas = '';
        foreach($books as $book){
            $kelas = $book->kelas;
        }

        return view('components.arsip.speaking', [
            'title' => 'Speaking'
        ], compact('books', 'kelas'));
    }
    public function listening()
    {
        $books = Buku::where('kategori', '=', 'listening')->get();
        $kelas = '';
        foreach($books as $book){
            $kelas = $book->kelas;
        }

        return view('components.arsip.listening', [
            'title' => 'Listening'
        ], compact('books', 'kelas'));
    }
    public function reading()
    {
        $books = Buku::where('kategori', '=', 'reading')->get();
        $kelas = '';
        foreach($books as $book){
            $kelas = $book->kelas;
        }

        return view('components.arsip.reading', [
            'title' => 'Reading'
        ], compact('books', 'kelas'));
    }
    public function translation()
    {
        $books = Buku::where('kategori', '=', 'translation')->get();
        $kelas = '';
        foreach($books as $book){
            $kelas = $book->kelas;
        }

        return view('components.arsip.translation', [
            'title' => 'Translation'
        ], compact('books', 'kelas'));
    }
}

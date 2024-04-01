<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Buku;

class Kelas extends Model
{
    use HasFactory;
    use HasUuids;

    protected $fillable = [
        'nama_kelas'
    ];

    public function buku(){
        return $this->belongsTo(Buku::class);
    }
}

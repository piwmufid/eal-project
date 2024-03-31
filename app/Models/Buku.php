<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Kelas;

class Buku extends Model
{
    use HasFactory;
    use HasUuids;

    protected $fillable = [
        'nama_buku', 'id_kelas', 'harga'
    ];

    public function kelas(){
        return $this->hasOne(Kelas::class, 'id', 'id_kelas');
    }

}

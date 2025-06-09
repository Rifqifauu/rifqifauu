<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $fillable = [
        'judul',
        'slug',
        'kategori',
        'konten',
        'gambar',
        'terbit',
        'status',
    ];
    //
}

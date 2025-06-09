<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portofolio extends Model
{
    protected $table ='portofolio';
    protected $fillable = [
        'nama',
        'gambar',
        'deskripsi',
        'tautan'
    ];
    //
}

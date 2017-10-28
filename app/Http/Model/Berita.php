<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $table = 'berita';

    protected $fillable = [
        'judul','slug', 'berita', 'tag_id', 'gambar'
    ];

}

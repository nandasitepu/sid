<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Peraturan extends Model
{
    protected $table = 'peraturan';
    
    protected $fillable = [
        'judul','slug', 'berita', 'tag_id', 'gambar'
    ];
}

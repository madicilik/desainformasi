<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $table = 'berita';

    protected $primaryKey = 'id_berita';

    protected $fillable = [
        'judul', 'nama', 'slug_berita', 'deskripsi', 'tgl_upload', 'foto',
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimoni extends Model
{
    protected $table = 'testimoni';

    protected $primaryKey = 'id_testimoni';

    protected $fillable = [
        'nama', 'jabatan', 'deskripsi', 'foto',
    ];
}

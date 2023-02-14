<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = 'galleri';

    protected $primaryKey = 'id_galleri';

    protected $fillable = [
        'foto_galleri',
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    protected $table = 'musics';

    protected $fillable = [
        'date_music', 'author', 'title', 'genre', 'record_company', 'interprete', 'album'
    ];


}

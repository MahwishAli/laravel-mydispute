<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guidance extends Model
{
    //
    protected $table = 'guidance';

    protected $fillable = [
            'user_id',
            'query',
    ];
}

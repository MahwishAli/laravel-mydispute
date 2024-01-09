<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfileDelete extends Model
{
    //
    protected $table = 'profile_delete';

    protected $fillable = [
            'user_id',
            'reason' ,
    ];

}

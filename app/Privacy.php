<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Privacy extends Model
{
    //
    protected $table = 'privacy_details';

    protected $fillable = [
            'user_id',
            'role_id',
            'contact_details',
            'unsubscribe',
            'busy_status' ,
    ];
}

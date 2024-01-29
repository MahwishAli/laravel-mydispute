<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Consultant;
use App\RequestDispute;

class Shortlisted extends Model
{
    //
    protected $table = 'shortlisted_jobs';

    protected $fillable = [
            'user_id',
            'request_id',
    ];

    public function user(){
        return $this->belongsTo(Consultant::class);
    }

    public function request(){
        return $this->belongsTo(RequestDispute::class);
    }
}

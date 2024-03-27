<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Consultant;
use App\RequestDispute;

class ApplyJobs extends Model
{
    //

    public function user(){
        return $this->belongsTo(Consultant::class, 'applicant_id', 'id');
    }

    public function request(){
        return $this->belongsTo(RequestDispute::class , 'job_id', 'id');
    }
}

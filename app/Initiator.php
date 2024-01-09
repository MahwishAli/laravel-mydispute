<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Role;

class Initiator extends Model
{
    //
    use SoftDeletes;

    protected $table = 'initiator_registeration';

    protected $fillable = [
            'companyName' ,
            'companyType' ,
            'industry',
            'email' ,
            'password',
            'role_id' ,
            'address',
            'country' ,
            'phone'   ,
            'companyDocuments',
            'companydesc' ,
            'paymentOption' ,
            'feeOption'  ,
            'agreeTerms' ,
    ];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }
}

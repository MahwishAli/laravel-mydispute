<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Initiator;
use App\Consultant;

class Chat extends Model
{

    protected $table = 'chat_model';

    protected $fillable = [
            'consultant_id' ,
            'initiator_id' ,
            'message',
            'seen' ,
            'sendby'
    ];

    public function initiator()
    {
        return $this->belongsTo(Initiator::class, 'initiator_id', 'id');
    }
}

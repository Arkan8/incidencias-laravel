<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mensaje extends Model
{
    protected $table = 'mensajes';

    public function user(){
        return $this->belongsTo('App\User','user_id');
    }
}

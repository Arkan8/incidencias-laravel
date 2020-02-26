<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class incidencia extends Model
{
    protected $table = 'incidencias';

    public function user(){
        return $this->belongsTo('App\User','user_id');
    }
}

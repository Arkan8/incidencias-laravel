<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class incidencia extends Model
{
    use LogsActivity;

    protected $table = 'incidencias';

    public function user(){
        return $this->belongsTo('App\User','user_id');
    }
}

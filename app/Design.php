<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Design extends Model
{
    public function designer(){
        return $this->belongsTo('App\User');
    }
}

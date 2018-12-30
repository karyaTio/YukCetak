<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function packets(){
        return $this->hasMany('App\Packet');
    }

    public function percetakan(){
        return $this->belongsTo('App\Percetakan');
    }
}

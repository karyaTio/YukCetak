<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ["service_id", "user_id", "quantity", "delivery_method", "message", "attachment"];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function services(){
        return $this->belongsTo('App\Service');
    }
}

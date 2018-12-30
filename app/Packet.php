<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Packet extends Model
{
    protected $fillable = ["measurement", "height", "width", "material", "price"];
    
    public function services(){
        return $this->belongsTo('App\Service');
    }

    public function order(){
        return $this->belongsTo('App\Order');
    }
}

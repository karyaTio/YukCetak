<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bidder extends Model
{
    
    public function user(){
        return $this->belongsTo('App\User');
    }

    public function designjob(){
        return $this->belongsTo('App\DesignJob');
    }
}

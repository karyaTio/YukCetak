<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Design extends Model
{
    protected $fillable = ["user_id", "title", "attachment"];

    public function designer(){
        return $this->belongsTo('App\User');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ["name", "description","finish_time", "category", "psd", "crl", "ai"];

    public function percetakan()
    {
        return $this->belongsTo('App\Percetakan');
    }

    public function packets(){
        return $this->hasMany('App\Packet');
    }

    public function orders(){
        return $this->hasMany('App\Order');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DesignJob extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ["title", "description", "budget", "attachment", "deadline"];

    public function percetakan(){
        $this->belongsTo('App\Percetakan');
    }
}

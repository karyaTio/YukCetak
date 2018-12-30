<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Percetakan extends Authenticatable
{
    use Notifiable;

    // Set table
    protected $table = 'percetakan';

    // The authentication guard for percetakan
    protected $guard = 'percetakan';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ["name", "email", "password"];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ["password", "remember_token"];

    
    /* Relation with services
     *
     * One Percetakan has manny services
     */
    public function services()
    {
        return $this->hasMany("App\Service");
    }

    /* Relation with DesignJob
     *
     * One Percetakan has manny DesignJob
     */
    public function designjob(){
        return $this->hasMany("App\DesignJob");
    }

    /* Relation with Orders
     *
     * One Percetakan has manny Orders
     */
    public function orders(){
        return $this->hasMany("App\Order");
    }

    public function id(){
        return $this->id;
    }
}

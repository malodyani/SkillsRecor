<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','major_id','uid','nid','phone',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    
    public function Major(){
    	return $this->belongsTo('App\Models\Major');
    }

    public function Course(){
    	return $this->hasMany('App\Models\Course');
    }
    
    public function Award(){
    	return $this->hasMany('App\Models\Award');
    }
    
}

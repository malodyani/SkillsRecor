<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Major extends Model
{
    //
    
	
	protected $table = 'major';
	// Primary Key
	public $primaryKey = 'id';
	// Timestamps
	public $timestamps = false;
	
	
	public function College(){
		
		return $this->belongsTo('App\Models\College');
	}
	
	public function User(){
		return $this->hasMany('App\Models\User');
	}
	
}

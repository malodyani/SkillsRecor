<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    //
    
	
	protected $table = 'school';
	// Primary Key
	public $primaryKey = 'id';
	// Timestamps
	public $timestamps = false;
	
	
	public function Award(){
		return $this->hasMany('App\Models\Award');
	}
	public function Course(){
		return $this->hasMany('App\Models\Course');
	}
	
	
}

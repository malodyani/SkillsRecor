<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //
    
	
	protected $table = 'course';
	// Primary Key
	public $primaryKey = 'id';
	// Timestamps
	public $timestamps = true;
	
	
	public function User(){
		return $this->belongsTo('App\Models\User');
	}
	
	
	public function School(){
		return $this->belongsTo('App\Models\School');
	}
	
}

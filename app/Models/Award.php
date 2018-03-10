<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Award extends Model
{
    //
    
	
	protected $table = 'award';
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

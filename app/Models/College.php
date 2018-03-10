<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    //
    
	protected $table = 'college';
	// Primary Key
	public $primaryKey = 'id';
	// Timestamps
	public $timestamps = false;
	
	
	public function Major(){
		return $this->hasMany('App\Models\Major');
	}
	
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $table = 'post';
	// Primary Key
	public $primaryKey = 'id';
	// Timestamps
	public $timestamps = false;
    	
}

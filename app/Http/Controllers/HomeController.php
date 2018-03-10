<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{


	/**
	 * 
	 * This Controller Handle Home Page  Logic
	 * 
	 * 
	 */
	
	public function __construct()
    {
        $this->middleware('auth');
    }
    
    

    
    public function index()
    {
        return view('Home');
    }
    
    
    
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
	
	public function __construct()
	{
		$this->middleware('auth');
	}
	
	
	
	
	public function EmployeesTable(){
		
		return view('login.admin.employees.employees', ['Emp' => User::all()->where('role','Employee')]);
	}
	
	
}

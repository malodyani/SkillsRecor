<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\EmployeeRequest;
use App\Misc\Roles;
use App\Http\Requests\CollegeRequest;
use App\Models\College;

class AdminController extends Controller
{
	
	public function __construct()
	{
		$this->middleware('auth');
	}
	
	
	
	
	public function EmployeesTable(){
		
		return view('login.admin.employees.employees', ['Emp' => User::all()->where('role','Employee')]);
	}
	
	public function AddEmployee(EmployeeRequest $Request){
		
		if($Request->isMethod('GET')){
			return view('login/admin/employees/add-employees');
		}else if ($Request->isMethod('POST')){
			
			$User = new User();
			$User->name = $Request->input('name');
			$User->nid = $Request->input('nid');
			$User->email = $Request->input('email');
			$User->phone = $Request->input('phone');
			$User->password = bcrypt($Request->input('password'));
			$User->role = Roles::$Employee;
			$User->save();
			
			return redirect('content');
		}
		
	}
	
	public function UpdateEmployee(EmployeeRequest $Request){
		
		if($Request->isMethod('GET')){
			
			$Emp = User::find($Request->input('id'));
			return view('login/admin/employees/edit-employees', ['Employee' => $Emp]);
		}else if ($Request->isMethod('POST')){
			
			$User = User::find($Request->input('id'));
			$User->name = $Request->input('name');
			$User->nid = $Request->input('nid');
			$User->email = $Request->input('email');
			$User->phone = $Request->input('phone');
			$User->password = bcrypt($Request->input('password'));
			$User->save();
			
			return redirect('content');
		}
		
	}
	
	public function DeleteEmployee(Request $Request){
		
		User::find($Request->input('id'))->delete();
		return redirect('employees');
	}
	
	
	public function AddCollege(CollegeRequest $Request){
		
		if($Request->isMethod('GET')){
			
			return view('login/admin/college/add-college');
		}else if ($Request->isMethod('POST')){
			
			$College = new College();
			$College->name = $Request->input('name');
			$College->save();
			return redirect('college');
		}
		return redirect('Home');
	}
	
	public function GetCollegeTable(){
		
		return view('login/admin/college/college', ['College' => College::all(),]);
	}
	
	public function UpdateCollege(CollegeRequest $Request){
		$Coll = College::find($Request->input('id'));
		
		if($Request->isMethod('GET')){
			
			return view('login/admin/college/edit-college', ['college' => $Coll]);
		}else if ($Request->isMethod('POST')){
			
			$Coll->name = $Request->input('name');
			$Coll->save();
			return redirect('college');
		}
		return redirect('Home');
	}
	
	
}

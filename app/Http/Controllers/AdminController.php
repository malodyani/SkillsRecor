<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\EmployeeRequest;
use App\Misc\Roles;
use App\Http\Requests\CollegeRequest;
use App\Models\College;
use App\Models\Major;
use App\Http\Requests\MajorRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\School;
use App\Http\Requests\SchoolRequest;

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
	
	
	public function GetMajorTable(Request $Request){
		
		return view('login/admin/major/major', ['Majors' => Major::all()]);
	}
	
	public function AddMajor(MajorRequest $Request){
		
		if($Request->isMethod('GET')){
			
			return view('login/admin/major/add-major');
		}else if ($Request->isMethod('POST')){
			
			$major = new Major();
			$major->name = $Request->input('name');
			$major->college_id = $Request->input('college');
			$major->save();
			return redirect('major');
		}
		return redirect('Home');
		
	}
	
	public function UpdateMajor(MajorRequest $Request){
		$major = Major::find($Request->input('id'));
		if($Request->isMethod('GET')){
			
			return view('login/admin/major/edit-major', ['Major' => $major , 'College' => College::all()]);
		}else if ($Request->isMethod('POST')){
			
			$major = new Major();
			$major->name = $Request->input('name');
			$major->college_id = $Request->input('college');
			$major->save();
			return redirect('major');
		}
		return redirect('Home');
	}
	
	public function GetSchoolsTable(Request $Request){
		
		return view('login/admin/school/school', ['School' => School::all()]);
	}
	
	public function AddSchool(SchoolRequest $Request){
		
		if($Request->isMethod('GET')){
			
			return view('login/admin/school/add-school');
		}else if ($Request->isMethod('POST')){
			
			$School = new School();
			$School->name = $Request->input('name');
			$School->save();
			
			return redirect('school');
		}
		return redirect('Home');
	}
	
	public function UpdateSchool(SchoolRequest $Request){
		$school = School::find($Request->input('id'));
		
		if($Request->isMethod('GET')){
			
			return view('login/admin/school/edit-school', ['School' => $school]);
		}else if ($Request->isMethod('POST')){
			
			$school->name = $Request->input('name');
			$school->save();
			
			return redirect('school');
		}
		return redirect('Home');
	}
	
	
}

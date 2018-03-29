<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
	
	public function __construct()
	{
		$this->middleware('auth');
	}
	
	
	public function GetStudentInfo(Request $Request){
		
		if($Request->isMethod('GET')){
			return view('login/employees/search');
		}else if ($Request->isMethod('POST')){
			
			 $Student = DB::table('users')
			->join('major', 'major.id', '=', 'major.id')
			->join('college', 'major.college_id', '=', 'college.id')
			->join('award', 'award.user_id', '=', 'users.id')
			->join('course', 'course.user_id', '=', 'users.id')
			->join('school', 'school.id', '=', 'course.school_id')
			->select('major.name As MajorName','college.name As CollegeName', 'users.name',
					'users.email', 'users.phone', 'users.nid','users.uid')
			->where('uid','=','435710196')
			->orwhere('nid','=','1094033758')
			->get();
			return $Student;
			
			return view('login/employees/records', ['Student' => $Student]);
			
		}
		return redirect('Home');
		
		
	}
	
	
}

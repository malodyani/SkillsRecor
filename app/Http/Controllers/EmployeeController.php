<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Misc\Roles;
use App\Models\Major;
use App\Models\Award;
use App\Models\Course;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\AddAward;
use App\Http\Requests\AddCoures;
use App\Models\School;
use Illuminate\Support\Facades\Auth;

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
			
			$UID = $Request->input('uid');
			
			
			
			  $Student = DB::table('users')
			 ->join('major', function ($join) use ($UID) {
			 	$join->on('users.major_id', '=', 'major.id')->where('users.uid','=',$UID);
			 })
			 ->join('college', function ($join) use ($UID){
			 	$join->on('major.college_id', '=', 'college.id')->where('users.uid','=',$UID);
			 })
			->select('major.name As MajorName','college.name As CollegeName', 'users.name As StudentName',
					'users.email As StudentEmail','users.id As StudentID' ,'users.phone as StudentPhone',
					'users.nid As StudentNid','users.uid as StudentUid','users.id as StudentID')
					->where('uid','=',$UID)
			->get();
			 
			
			$Awards = DB::table('users')
			->join('award', function ($join) use ($UID){
				$join->on('award.user_id', '=', 'users.id')->where('users.uid','=',$UID);
			})
			->select('award.name as AwardName','award.id as AwardID',
					'award.school_id as AwardSchool', 'award.took_at as AwardTookAt','award.Auth as Auth')
					->where('uid','=',$UID)
			->get();
			
					
			 $Course = DB::table('users')
			 ->join('course', function ($join) use ($UID) {
			 	$join->on('course.user_id', '=', 'users.id')->where('users.uid','=',$UID);
			})
			->select('course.id as CourseID','course.name as CourseName',
					'course.start_at as CourseStart_at','course.end_at as CourseEndAt',
					'course.hours as CourseHours','course.school_id as SchoolID','course.type as CourseType','course.Auth as Auth')
					->where('uid','=',$UID)
			->where('type','=',Roles::$Course)
			->get();
			
			
			  $Activity = DB::table('users')
			 ->join('course', function ($join) use ($UID) {
			 	$join->on('course.user_id', '=', 'users.id')->where('users.uid','=',$UID);
			})
			->select('course.id as ActivityID','course.name as ActivityName',
					'course.start_at as ActivityStart_at','course.end_at as ActivityEndAt',
					'course.hours as ActivityHours', 'course.school_id as SchoolID','course.type as Type','course.Auth as Auth')
					->where('uid','=',$UID)
					->where('type','=',Roles::$Activity)
					->get();
			
		if(!$Student->isEmpty())
			return view('login/employees/records', ['Student' => $Student , 'Awards' => $Awards, 'Course' => $Course, 'Activity' => $Activity]);
		else
			return redirect('search')->with('uid','لا يوجد طالب بهذه المعلومات.');
			
		}
		return redirect('Home');
	}
	
	public function AddAward(Request $Request){
		
		if($Request->isMethod('GET')){
			return view('login.awards.add-awards', ['Schools' => School::all(),'Student_ID' => $Request->input('id'), 'uid' => User::find($Request->input('id'))->uid]);
		}else if($Request->isMethod('POST')){
			
			$Awrd = new Award();
			$Awrd->name = $Request->input('name');
			$Awrd->took_at = $Request->input('date');
			$Awrd->school_id = $Request->input('school');
			$Awrd->user_id =  $Request->input('id'); 
			$Awrd->Auth = false;	
			$Awrd->save();
			
			return $this->GetStudentInfo($Request);
			
		}
		
		return redirect('Home');
	}
	
	
	public function AddActivity(Request $Request){
		
		if($Request->isMethod('GET')){
			
			return view('login.activities.add-activities', ['Schools' => School::all(),'Student_ID' => $Request->input('id'),
					'uid' => User::find($Request->input('id'))->uid]);
			
		}else if($Request->isMethod('POST')){
			$Courses 			= new Course();
			$Courses->name 		= $Request->input('name');
			$Courses->hours 	= $Request->input('hours');
			$Courses->school_id = $Request->input('school');
			$Courses->start_at 	= $Request->input('start_date');
			$Courses->end_at 	= $Request->input('end_date');
			$Courses->user_id	= $Request->input('id');
			$Courses->type 		= 1;
			$Courses->Auth 		= false;
			$Courses->save();
			
			return $this->GetStudentInfo($Request);
		}
		return redirect('Home');
	}
	
	
	public function AddCourse(Request $Request)
	{
		
		if($Request->isMethod('GET')){
			
			return view('login.cours.add-cours', ['Schools' => School::all(),'id' => $Request->input('id'),
					'uid' => User::find($Request->input('id'))->uid]);
			
		}else if($Request->isMethod('POST')){	
			$Courses 			= new Course();
			$Courses->name 		= $Request->input('name');
			$Courses->hours 	= $Request->input('hours');
			$Courses->school_id = $Request->input('school');
			$Courses->start_at 	= $Request->input('start_date');
			$Courses->end_at 	= $Request->input('end_date');
			$Courses->user_id	= $Request->input('id');
			$Courses->type 		= 0;
			$Courses->Auth 		= false;
			$Courses->save();
			return $this->GetStudentInfo($Request);
			
		}
		
		return redirect('Home');
	}
	
	
	public function EditStudent(Request $Request){
		
		if($Request->isMethod('GET')){
			$Student = User::find($Request->input('student_id'));
			$Majors = Major::all();
			return view('login.employees.edit-student', ['Student' => $Student, 'Majors' => $Majors]);
			
		}else if($Request->isMethod('POST')){

			$Student = User::find($Request->input('id'));
			$Student->name = $Request->input('name');
			$Student->uid = $Request->input('uid');
			$Student->nid = $Request->input('nid');
			$Student->phone = $Request->input('phone');
			$Student->email = $Request->input('email');
			$Student->save();
			return Redirect::back()->with('message','Operation Successful !');
		}
		return redirect('Home');
		
	}
	
	public function AuthCourse(Request $Request){
		
		$Course = Course::find($Request->input('id'));
		$Course->Auth = true;
		$Course->save();
		
		return $this->GetStudentInfo($Request);
		
	}
	
	public function AuthAward(Request $Request){
		
		$Award = Award::find($Request->input('id'));
		$Award->Auth = 	true;
		$Award->save();
		return $this->GetStudentInfo($Request);
		
	}
	
}

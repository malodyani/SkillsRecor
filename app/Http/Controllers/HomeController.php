<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Award;
use Illuminate\Support\Facades\Auth;
use App\Models\School;
use App\Http\Requests\AddCoures;
use App\Http\Requests\AddAward;
use App\Http\Requests\PassWordChangeRequest;
use App\Http\Requests\ProfileRequest;
use App\Misc\Roles;
use App\Models\User;
use App\Models\College;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
	
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     * 
     * 
     * CRED Couesres
     * CRED Activitys
     * CRED Awards
     */
    
    public function Home()
    {
    	
    	// To Retrive all Courses 
    	$Courses = Course::all()->where('type', Roles::$Course)->where('student_id', Auth::user()->id);
    	
    	// To Rerive all Activitys
    	$Activity = Course::all()->where('type', Roles::$Activity)->where('student_id', Auth::user()->id);
    	
    	// To Retrive all Awards
    	$Awards  = Award::all()->where('student_id', Auth::user()->id); 
    	
    	
    	return view('login.home', ['Courses' => $Courses,'Activity'=> $Activity,'Awards' => $Awards]);
    }
    
    
    public function DeleteCourse(Request $Request){
    
		// Find The Cource Then Delete it !    	
    	$Courses = Course::find($Request->input('id'))->delete();
    	return redirect('Home');
    }
    	
    public function EditCourse(AddCoures $Request)
    {
    	
    	if($Request->isMethod('GET')){
    	// Find the Course and then return it to the Student
    		$Courses = Course::find($Request->input('id'));
    	if($Courses->type == true) // if it was true then that mean it's Course
    		return view('login.cours.edit-cours', ['Courses' => $Courses, 'Schools' => School::all(),]);
    	else if($Courses->type == false) // if it was false then that mean it is activity
    		return view('login.activities.‏‏edit-activities', ['Courses' => $Courses, 'Schools' => School::all(),]);
    	}else if($Request->isMethod('POST')){

    	$Courses = Course::find($Request->input('id'));
    	$Courses->name = $Request->input('name');
    	$Courses->hours = $Request->input('hours');
    	$Courses->school_id = $Request->input('school');
    	$Courses->start_at = $Request->input('start_date');
    	$Courses->end_at = $Request->input('end_date');
    	$Courses->save();
    	
    	}
    	return redirect('Home');

    }
    
    public function AddCourse(AddCoures $Request)
    {
    	
    	if($Request->isMethod('GET')){
    		
    	return view('login.cours.add-cours', ['Schools' => School::all(),]);
    		
    	}else if($Request->isMethod('POST')){
    	$Courses 			= new Course();
    	$Courses->name 		= $Request->input('name');
    	$Courses->hours 	= $Request->input('hours');
    	$Courses->school_id = $Request->input('school');
    	$Courses->start_at 	= $Request->input('start_date');
    	$Courses->end_at 	= $Request->input('end_date');
    	$Courses->type 		= 0;
    	$Courses->student_id = Auth::user()->id;
    	$Courses->save();
    		
    	}

    	return redirect('Home');
    }
    
    
    public function DeleteAward(Request $Request){
    	
    	$Award = Award::find($Request->input('id'))->delete();
    	return redirect('Home');
    	
    	
    }
    
    public function EditAward(AddAward $Request){
    	
    	if($Request->isMethod('GET')){
    		
    		$Awrd = Award::find($Request->input('id'));
    		return view('login.awards.‏‏edit-awards' , ['Awards' => $Awrd, 'Schools' => School::all(),]);    		
    	}else if($Request->isMethod('POST')){
    		
    		$Awrd = Award::find($Request->input('id'));
    		$Awrd->name = $Request->input('name');
    		$Awrd->took_at = $Request->input('date');
    		$Awrd->school_id = $Request->input('school');
    		$Awrd->save();
    	}
    	
    	return redirect('Home');
    }
    
    public function AddAward(AddAward $Request){
    	
    	if($Request->isMethod('GET')){
    		return view('login.awards.add-awards', ['Schools' => School::all(),]);
    	}else if($Request->isMethod('POST')){
    		
    		$Awrd = new Award();
    		$Awrd->name = $Request->input('name');
    		$Awrd->took_at = $Request->input('date');
    		$Awrd->school_id = $Request->input('school');
    		$Awrd->student_id =  Auth::user()->id;
    		$Awrd->save();
    	}
    	
    	return redirect('Home');
    }
    
    
    public function AddActivity(AddCoures $Request){
    	
    	if($Request->isMethod('GET')){
    		
    		return view('login.activities.add-activities', ['Schools' => School::all(),]);
    		
    	}else if($Request->isMethod('POST')){
    		$Courses 			= new Course();
    		$Courses->name 		= $Request->input('name');
    		$Courses->hours 	= $Request->input('hours');
    		$Courses->school_id = $Request->input('school');
    		$Courses->start_at 	= $Request->input('start_date');
    		$Courses->end_at 	= $Request->input('end_date');
    		$Courses->type 		= 1;
    		$Courses->student_id = Auth::user()->id;
    		$Courses->save();
    	}
			return redirect('Home');    	
    }
    
    
    public function Profile(ProfileRequest $Request){
    	
    	if($Request->isMethod('GET')){
    	 $User = DB::table('users')
    	->join('major', 'users.major_id', '=', 'major.id')
    	->join('college', 'major.college_id', '=', 'college.id')
    	->select('major.name As MajorName','college.name As CollegeName', 'users.name', 'users.email', 'users.phone', 'users.nid','users.uid')
    	->where('users.id', Auth::user()->id)
    	->get();
    	
    		return view('login.profile', ['User' => $User]);
    		
    	}else if($Request->isMethod('POST') && Auth::user()->role == Roles::$Student){

    		$U = User::find(Auth::user()->id);
    		$U->email = $Request->input('email');
    		$U->phone = $Request->input('phone');
    		$U->save();
    	}else if($Request->isMethod('POST') && (Auth::user()->role == Roles::$Admin || Auth::user()->role == Roles::$Employee)){
    		
    		$U = User::find(Auth::user()->id);
    		$U->name = $Request->input('name');
    		$U->email = $Request->input('email');
    		$U->nid = $Request->input('nid');
    		$U->phone = $Request->input('phone');
    		$U->save();
    	}
    	
    	return redirect('Home');   
	    	
    }
    
    public function ChangePassword(PassWordChangeRequest $Request){
    	
    	if($Request->isMethod('GET')){
    		return view('login.change-password');
    	}else if($Request->isMethod('POST')){

    			if (Hash::check($Request->input('OldPassword'), Auth::user()->password))
    			{
    				// The passwords match...
    				$U = User::find(Auth::user()->id);
    				$U->password = bcrypt($Request->input('NewPassword'));
    				$U->save();
    				return redirect('/logout');
    			}else return redirect('/change-password')->withErrors('كلمة المرور الحالية غير صحيحه');
    		
    	}
    }
    
    
    public function AjaxCollege(Request $request){
    	
    	
    	
    	return response()->json(['data' => 'Hello Wolrd']);
    }
    
    
}

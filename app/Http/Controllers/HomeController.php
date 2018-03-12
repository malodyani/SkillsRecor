<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Award;
use Illuminate\Support\Facades\Auth;
use App\Models\School;

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
     * 
     * 
     */
    
    public function Home()
    {
    	
    	// To Retrive all Courses 
    	$Courses = Course::all()->where('type', true);
    	
    	// To Rerive all Activitys
    	$Activity = Course::all()->where('type', false);
    	
    	// To Retrive all Awards
    	$Awards  = Award::all()->where('student_id', Auth::user()->id); 
    	
    	return view('login.home', ['Courses' => $Courses,'Activity'=> $Activity,'Awards' => $Awards]);
    }
    
    
    public function DeleteCourse(Request $Request){
    
		// Find The Cource Then Delete it !    	
    	$Courses = Course::find($Request->input('id'))->delete();
    	return redirect('Home');
    }
    
    	
    public function EditCourse(Request $Request)
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
    
    public function AddCourse(Request $Request)
    {
    
    	$Courses = new Course();
    	$Courses->name = $Request->input('name');
    	$Courses->hour = $Request->input('hours');
    	$Courses->school_id = $Request->input('school');
    	$Courses->start_at = $Request->input('start_date');
    	$Courses->end_at = $Request->input('end_date');
    	$Courses->type = $Request->input('type');
    	$Courses->save();
    }
    
    
    
    public function DeleteAward(Request $Request){
    	
    	$Award = Award::find($Request->input('id'))->delete();
    	return redirect('Home');
    	
    	
    }
    
    public function EditAward(Request $Request){
    	
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
    
    public function AddAward(){
    	
    }
    
    
    
    
}

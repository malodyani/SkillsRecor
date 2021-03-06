<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use App\Models\College;
use App\Models\Major;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/Home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:191',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        	'uid'=> 'required|numeric|unique:users|digits:9',
        	'nid' => 'required|numeric|unique:users|digits:10',
        	'major_id' => 'required|numeric',
        	'phone' => 'nullable|numeric',
        		
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        	'uid' => $data['uid'],
            'nid' =>$data['nid'],
        	'major_id' =>$data['major_id'],
        	'role' => 'Student',
        ]);
    }
    
    
    
    public function Ajax(Request $request)
    {
    	
    	 $Majors = Major::where('college_id', '=',$request->input('id'))->get();
    	 	
    	return response()->json(
    			['Majors' => $Majors]
    			, 200);
    }
    
}

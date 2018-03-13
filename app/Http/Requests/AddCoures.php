<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use App\Misc\Roles;

class AddCoures extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
    	
    	if(Auth::user()->role == Roles::$Student)
    		return true;
    	else if(Auth::user()->role == Roles::$Admin)
    		return true;
    		
    	return false;
    	
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
    	
    	if($this->isMethod('GET')){
			return [
    		];
    	}else if($this->isMethod('POST')){
			
        return [
  				'name' 		=> 'required|max:191',
    			'hours' 	=> 'required|numeric',
        		'school' 	=> 'required|numeric',
        		'start_date'=> 'required|date',
        		'end_date' 	=> 'required|date',
        		
        ];
			
		}
    }
    
    
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use App\Misc\Roles;

class ProfileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
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
    				// Nothing !
    		];
    		
    	}else if($this->isMethod('POST') && Auth::user()->role == Roles::$Admin)
    		return [
    				'nid' 	=> 'required|digits:10|numeric',
    				'name' 	=> 'required|max:191',
    				'email'	=> 'required|email|max:255',
    				'phone'	=> 'nullable|numeric',
    		];
    	else if($this->isMethod('POST') && Auth::user()->role == Roles::$Student)
    			return [
    					'email'	=> 'required|email|max:255',
    					'phone'	=> 'nullable|numeric',
    			];
    }
}

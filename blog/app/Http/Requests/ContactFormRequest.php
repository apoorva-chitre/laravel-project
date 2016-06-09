<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;


class ContactFormRequest extends Request
{
    /* Determine whether the user is authorized to make this request */

    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * 
     */

    public function rules()
    {
        return [
            
        'name' => 'required',
        'email' => 'required|email',
        'message' => 'required',
        
        ];
    }
}

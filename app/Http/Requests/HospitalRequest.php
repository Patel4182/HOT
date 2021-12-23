<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HospitalRequest extends FormRequest
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
        return [
            'city'=>'required',
            'name'=>'required',
            'email'=>'required|unique:hospitals',
            'contact_no'=>'required',
            'address'=>'required',
            'password'=>'required',
            'contact_person_name'=>'required',
            'contact_person_mobile_no'=>'required',
            'description'=>'required',
            'image'=>'required',
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DoctorRequest extends FormRequest
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
            'hname'=>'required',
            'city'=>'required',
            'name'=>'required',
            'bdate'=>'required',
            'gender'=>'required',
            'contact_no'=>'required',
            'specialization'=>'required',
            'degree'=>'required',
            'experience'=>'required',
            'email'=>'required|unique:doctors',
            'description'=>'required',
            'image'=>'required',
        ];
    }
}
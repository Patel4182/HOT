<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AppointmentRequest extends FormRequest
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
            'name'=>'required',
            'doctor'=>'required',
            'fullname'=>'required',
            'email'=>'required',
            'contact_no'=>'required',
            'gender'=>'required',
            'age'=>'required',
            'city'=>'required',
            'prefer_date'=>'required',
            'prefer_time'=>'required',
            'message'=>'required',
        ];
    }
}

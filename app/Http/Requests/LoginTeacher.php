<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginTeacher extends FormRequest
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
            'code_teacher' =>'required',
            'password' => 'required|min:8',
        ];
    }
    public function messages()
    {

        return [
            'code_teacher.required' => trans('customer.code_student.required'),
            'password.required' => trans('customer.email.psw_required'),
            'password.min' => trans('customer.email.psw_min'),

        ];
    }
}

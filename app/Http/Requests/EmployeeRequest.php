<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
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
            'emp_id'=>['required', 'numeric'],
            'name_prefix' => ['max:10'],
            'first_name'=>['required', 'max:100'],
            'middle_initial' => ['max:1'],
            'last_name'=>['required', 'max:100'],
            'gender'=>['required', 'max:1'],
            'e_mail'=>['required', 'email'],
            'fathers_name' => ['string'],
            'mothers_name' => ['string'],
            'mothers_maiden_name' => ['string'],
            'date_of_birth'=>['required', 'date'],
            'date_of_joining'=>['required', 'date'],
            'salary' => ['required', 'numeric'],
            'ssn' => ['required', 'max:11'],
            'phone_no'=> ['required', 'max:20'],
            'city' => ['required', 'max:189'],
            'state' => ['required', 'max:50'],
            'zip' => ['required', 'max:18']
        ];
    }
}

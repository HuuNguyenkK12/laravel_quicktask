<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'fullname' => ['required', 'string'],
            'email'    => ['required', 'string', 'email', 'unique:users'],
            'username' => ['required', 'string', 'min:8', 'max:40', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ];
    }
    public function messages()
    {
        return [
            'fullname.required' => trans('validation.auth.fullname.required'),
            'username.required' => trans('validation.auth.username.required'),
            'username.min'      => trans('validation.auth.username.min'),
            'username.max'      => trans('validation.auth.username.max'),
            'username.unique'   => trans('validation.auth.username.unique'),
            'password.min'      => trans('validation.auth.password.min'),
            'password.confirmed'=> trans('validation.auth.password.confirmed'),
        ];
    }
}

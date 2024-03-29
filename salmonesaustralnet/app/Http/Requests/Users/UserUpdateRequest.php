<?php

namespace App\Http\Requests\Users;

use App\User;
use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
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
        return[
            'name'      => 'min:4|max:70|required|string',
            'lastname'  => 'min:5|max:70|required|unique:users',
            'password'  => 'required|confirmed|min:8',
        ];
    }
}

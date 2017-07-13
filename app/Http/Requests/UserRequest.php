<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\Models\User;

class UserRequest extends Request
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
        $user = User::find($this->user);

        switch($this->method())
        {
            case 'POST':
            {
                return [
                    'username' => 'required|unique:users',
                    'name' => 'required',
                    'email' => 'required|email|unique:users',
                    'password' => 'required|confirmed|min:6',
                ];
            }

            case 'PATCH':
            {
                return [
                    'username' => 'unique:users,username,'.$user->id.'|required',
                    'name' => 'required',
                    'email' => 'email|unique:users,email,'.$user->id.'|required'
                ];
            }
        }
    }

}

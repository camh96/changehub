<?php

namespace App\Http\Requests;

use Auth;
use App\Http\Requests\Request;

class UpdateProfileRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /*  *
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $user_id = intval(Request::all()['user_id']);

        return [
            'fname' => 'required|max:255',
            'lname' => 'required|max:255',
            'metronumber' => 'min:6',
            'email' => 'required|email|max:255|unique:users,email,' . $user_id ,
            'password' => 'confirmed|min:6',
        ];
    }
}

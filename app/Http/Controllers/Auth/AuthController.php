<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use Request;
// use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    protected $redirectPath = '/';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'fname' => 'required|max:255',
            'lname' => 'required|max:255',
            'phone' => 'required|min:7|unique:users',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */


    // public function getToolsArray(Request $request)
    //     {
    //         $toolsArray = $request->input('tools');
    //         dd($toolsArray);
    //     }

    public function create(array $data)
    {

        return User::create([
            'fname' => $data['fname'],
            'lname' => $data['lname'],
            'phone' => $data['phone'],
            'metronumber' => $data['metronumber'],
            'flybuys' => $data['flybuys'],
            'tools' => implode(' , ' , $data['tools']),
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

    
    }

    protected function getEmailAvailable(Request $request)
    {
        $user = User::where('email', $request->input('email'))->first();
        return response()->json([
            'success' => true,
            'email' => $request->input('email'),
            'available' => !(bool)$user,
        ]);
    }


}

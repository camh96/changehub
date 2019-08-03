<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use LaravelArdent\Ardent\Ardent;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateProfileRequest;
use App\User;
use App\Bus;
use App\Reply;
use App;

class ProfileController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */

    public function noID()
    {
            return view('errors.404');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @return Response
     */
    public function edit($xid)
    {

        if(Auth::User()->id == $xid or Auth::user()->access === "admin")
        {

            if(!User::find($xid))
            {
                App::abort(404, "Not Found");
                return view('errors.404');
            }

            $user = Auth::user();

            $uid = User::find($xid);

            return view('profile.edit', compact('user','uid','uid'));
        }

        else
        {
            App::abort(403, 'Sorry, access denied. 403 Unauthorized action.');
            return view('errors.403');  
        }
    }


    public function listall()
    {
                

        if(Auth::user()->access != "admin")
        {
            App::abort(403, 'Sorry, access denied. 403 Unauthorized action.');
            return view('errors.403');   
        }
        else
        {
            $userlist = User::all();
            return view('profile.list', compact('userlist'));
        }
    }


public function show($id)
    {
        

        $check = (string)Auth::user()->id;
        $amount = Bus::where('user_id','=', $id)->get();

        $user = User::find($id);

        if(!is_object($user))
        {  
            App::abort(404, "Not Found");
            return view('errors.404');  

        }
        else{

        $hash = md5(strtolower(trim($user->email)));
        $profilePic = "http://www.gravatar.com/avatar/".$hash."?d=identicon";
        
        if($check == $id or Auth::user()->access === "admin")
        {
            $person = User::findOrFail($id);
            
            return view('profile.user', compact('person','amount', 'profilePic') );
             
        }
        else
        {
            App::abort(403, 'Sorry, access denied. 403 Unauthorized action.');
            return view('errors.403');  
        }

}    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function update(UpdateProfileRequest $request)
    {
        
        //not Auth::user, auth means who is logged in, n00b!

        $user = (integer)$request->input('user_id');

        $getObj = User::findOrFail($user); // get user object

        $oldpword = $getObj->password;
        $getObj->fill($request->all());
        if (empty($request->input('password')))
        {
            $getObj->password = $oldpword;
        }
        else
        {
            $getObj->password = bcrypt($request->input('password'));    
        }
        $getObj->save();
        
        return redirect('users/'.$getObj->id)->with('status.success', "Your profile has been updated.");
    }

     public function destroy($id)
    {
        if(!empty((Bus::where('user_id', '=', $id)->get())))
        {
            $getTrips = Bus::where('user_id','=', $id)->delete();    
        
        }

        $user = User::findOrFail($id);
        $user->delete();

        if(Auth::User()->access == "admin")
        {
            return redirect('users')->with('status.danger', "Profile Deleted.");
        }
        else
        {
            return redirect('/')->with('status.warning', "We're sad to see you go. If there is something we can do better next time, please contact us.");
        }
    }
}

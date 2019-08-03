<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

use Request;
use App\Http\Requests;
use App\Http\Requests\CreateScheduleRequest;
use App\Http\Controllers\Controller;
use App\Bus;
use App\User;
use Auth;
use App;

class TripController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */

    public function home()
    {
        $getUid = Auth::user()->id;
        $checkTrips = count(Bus::where('user_id','=',$getUid)->get());
        // dd($checkTrips);
        $schedules = Bus::with('user')->get(); 
        $count = count($schedules);
        return view('trips.dash', compact('schedules', 'count','checkTrips'));
    }

    public function index()
    {
        App::abort(404, 'Sorry, access denied. 403 Unauthorized action.');
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $schedule = new Bus;

        return view('trips.new', compact('schedule'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(CreateScheduleRequest $request)
    {
        

        $schedule = new Bus($request->all());
        $submittingUser = Auth::user()->id;
        $schedule->user()->associate($request->user());
        $schedule->save();
        return redirect('mytrips/'.$submittingUser)
            ->with('status.warning', 'Your request has been submitted, and is pending a reply.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */

public function show($id)
    {  /*
        * Please, please please don't
        * change anything here. It works,
        * so no need to change. Too many 
        * hours were spent writing this.
        * Thank you.
        */
        
        $check = Auth::user()->id;
        $id = (integer)$id;

        $countTrips = count(Bus::where('user_id','=',$id)->get());

        if($countTrips <= 0)
        {
            return view('trips.sorry');
        }

        if($check !== $id && Auth::user()->access === "user")
        {
            App::abort(403, 'Sorry, access denied. 403 Unauthorized action.');
        }
        else
        {
            $schedules = Bus::where('user_id','=', $id)->get();
            $name = User::where('id','=',$id)->get();
            return view('trips.index', compact('schedules','name'));
        }

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

    public function admin()
    {
        if(Auth::user()->access === "admin")
        {
            $schedules = Bus::with('user')->get();    
            $count = count($schedules);
            return view('trips.admin', compact('schedules', 'count'));
        }
        else
        {
            App::abort(403, 'Sorry, access denied. 403 Unauthorized action.');
            return view('errors.403');
        }
    }

}

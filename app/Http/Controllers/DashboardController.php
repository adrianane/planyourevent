<?php

namespace App\Http\Controllers;

use App\Hall;
use App\Location;
use Illuminate\Http\Request;
use App\User;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);

        $locations = Location::where('user_id', '=', $user_id)->get();
        $loc_ids_curr_user_array = [];
        foreach ($locations as $loc) {
            //create an array with all location ids of the current loggedin user
            $loc_ids_curr_user_array[] = $loc->id;
        }
        //get the halls that belongs to the current user and are related to the locations of the current user
        $usershalls = Hall::whereIn('location_id', $loc_ids_curr_user_array)->get();

        return view('dashboard')->with([
            'posts' => $user->posts,
            'locations' => $user->locations,
            'halls' => $usershalls
        ]);
    }
}

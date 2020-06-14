<?php

namespace App\Http\Controllers;

use App\Hall;
use Illuminate\Http\Request;
use App\Location;

class HallController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //@TODO: get halls of current user (JOIN ?)
        //$current_user = auth()->user()->getAuthIdentifier();

        //get all my event halls
        $halls = Hall::orderby('name','desc')->paginate(10);

        return view('halls.index')->with('halls', $halls);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user_id = auth()->user()->id;
        $locations = Location::where('user_id', '=', $user_id)->get();
        //send locations to the view, so we can display them in the dropdown
        return view('halls.create')->with('locations', $locations);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
                'name' => 'required',
                'max_seats' => 'required|integer|min:10',
                'min_seats' => 'required|integer|min:10',
                'location_id' => 'required|integer|min:0|not_in:0',
            ]
        );
        $hall = new Hall();
        $hall->name = $request->name;
        $hall->max_seats = $request->max_seats;
        $hall->min_seats = $request->min_seats;
        $hall->description = $request->description;
        $hall->location_id = $request->location_id;

        $hall->save();

        return redirect('/halls')->with('Event hall added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hall = Hall::find($id);

        return view('halls.show')->with('hall', $hall);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hall = Hall::find($id);
        $user_id = auth()->user()->id;
        $locations = Location::where('user_id', '=', $user_id)->get();

        return view('halls.edit')->with(
            [
                'hall'=> $hall,
                'locations'=> $locations
            ]
        );

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate(
            $request,
            [
                'name' => 'required',
                'max_seats' => 'required|integer|min:10',
                'min_seats' => 'required|integer|min:10',
                'location_id' => 'required|integer|min:0|not_in:0',
            ]
        );

        $hall = Hall::find($id);
        $hall->name = $request->name;
        $hall->description = $request->description;
        $hall->min_seats = $request->min_seats;
        $hall->max_seats = $request->max_seats;
        $hall->location_id = $request->location_id;

        $hall->save();


        return redirect('/dashboard')->with('success', 'The hall was successfully edited!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hall = Hall::find($id);
        $hall->delete();

        return redirect('/dashboard')->with('success', 'Hall deleted!');
    }
}

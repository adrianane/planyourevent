<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;
use App\LocationsImages;

class LocationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //show list of locations
        $locations = Location::orderby('name','desc')->paginate(5);

        return view('locations.index')->with('locations', $locations);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('locations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request, [
            'name' => 'required',
            'street' => 'required',
            'nr' => 'required',
            'city' => 'required',
            'zip' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'img.*' => 'image|nullable|max:1999'
        ]);

        $location = new Location();
        $location->name = $request->name;
        $location->street = $request->street;
        $location->nr = $request->nr;
        $location->city = $request->city;
        $location->district = $request->district;
        $location->country = $request->country;
        $location->zip = $request->zip;
        $location->phone = $request->phone;
        $location->email = $request->email;
        $location->web = $request->web;
        $location->fb = $request->fb;
        $location->twitter = $request->twitter;
        $location->pinterest = $request->pinterest;
        $location->description = $request->description;
        $location->img = count($request->file('img'));
        $location->save();

        //handle images and save
    
        if ($request->hasFile('img')) {
            foreach($request->file('img') as $image)
            {
                //get filename with ext
                $fileNameWithExt = $image->getClientOriginalName();

                //get just filename
                $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

                //get just extension
                $fileExt = pathinfo($fileNameWithExt, PATHINFO_EXTENSION);

                //filename to store
                $filenameToStore = $fileName . '_' . time() . '.' . $fileExt;

                //upload image
                //@TODO: create folders according to the user id
                $path = $image->storeAs('public/user/', $filenameToStore);

                //save location's images
                $locationImage = new LocationsImages([
                    'path' => $filenameToStore
                ]);
                $location->locationImages()->save($locationImage);
            }
        }

        return redirect('/locations')->with('Location added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $currentLocation = Location::find($id);

        return view('locations.show')->with('location', $currentLocation);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

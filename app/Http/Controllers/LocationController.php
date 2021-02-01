<?php

namespace App\Http\Controllers;

use App\Location;
use App\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SelectLocation;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Location::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Select a location and store in session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function select(SelectLocation $request)
    {
        
        
        $article = Article::where('alias','learn-spanish-booking.html')->first();
        $courses = Location::all();
        session([
            'location' => $request->locations,
        ]);
        return view('booking.course',compact('courses','article'));
    }

    /**
     * Select a location and store in session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function validateLocations(SelectLocation $request)
    {
        return response()->json(['message' => true]);
    }

    /**
     * Select a location and store in session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function indexLocations(Request $request)
    {
        return Location::all();
    }



    /**
     * Return the courses from a locations.
     *
     * @param  \App\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function courseLocation(SelectLocation $request)
    {
        $locations =$request->locations;

        foreach ($locations as $key => $location) {
            $location = Location::find($location);
            $location->courses;
            $locations[$key] = $location;

        }
        return $locations;
    }


    /**
     * Redirect Previus with Input.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function previus(Request $request)
    {
        //
        return back()->withInput();
    }
}

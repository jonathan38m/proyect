<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;

class CountryController extends Controller
{
    /**
     * Display a listing of the Contries.
     *
     * @return \App\Country
     */
    public function index()
    {
        return Country::all();
    }
}

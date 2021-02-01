<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;

class GalleryController extends Controller
{
    //
    public function store(Request $request)
    {
    	$c = new Gallery;
        $c->name = $request->name;
        $c->alias = $request->alias;
        $c->ruta = $request->ruta;
        $c->save();

    }
}

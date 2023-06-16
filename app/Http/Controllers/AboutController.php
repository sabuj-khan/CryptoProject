<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    function aboutAction(Request $request){
        return view('pages.about');
    }

    function howworksAction(Request $request){
        return view('pages.how');
    }
}

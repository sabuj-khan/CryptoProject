<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function homePageAction(Request $request){
        return view('pages.home');
    }
}

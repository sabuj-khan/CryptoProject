<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class DemoController extends Controller
{   

    function cookieAction(Request $request){
       
       $n1 = $request->nm1;
       $n2 = $request->nm2;

       $t = $n1+$n2;

       Log::info($t);
       
       return $t;

    }

























    function demoAction(Request $request){
        $value = $request->input();

        return $value;
      
    }

    function fileAction(Request $request){
        /*$file = $request->file('file');
        $file->storeAs('uploads/images',$file->getClientOriginalName());
       $file->move(public_path('uploads/images'), $file->getClientOriginalName()); */

       

       return redirect('/redirecr');

      }

      function redirectAction(){
        return "This redirect page redirected from file page";
      }
    
}

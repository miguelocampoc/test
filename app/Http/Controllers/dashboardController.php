<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function index(Request $request)
    { 
     $valor=$request->query('title');
     return view('test',['title'=>$valor]);
    }
}

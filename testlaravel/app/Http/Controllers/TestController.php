<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function master(){
        return view('endresult.master');
    }

    public function home()
    {
        return view('endresult.home');
    }
    public function contact()
    {
        return view('endresult.contact');
    }
    public function about()
    {
        return view('endresult.about');
    }



}

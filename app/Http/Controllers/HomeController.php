<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function home()
    {
        return view('home.dsc');
    }

    public function reports()
    {
        return view('home.reports');
    }

    public function sc()
    {
        return view('home.sc');
    }

    public function bulk()
    {
        return view('home.bulk');
    }

    public function account()
    {
        return view('home.account');
    }

    public function project(){
        return view('home.project');
    }

}

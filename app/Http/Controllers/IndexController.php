<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
        public function index()
    {
        return view('base.index');
    }   
    public function apoint()
    {      
          return view('base.appointment');
    }
     public function homes()
    {
        return view('base.homepri');
    }
    public function oneperson()
    {
        return view('base.oneperson');
    }
    public function limited()
    {
        return view('base.limited');
    }
    public function pink(){
        return view('base.pink');
    }
    public function object()
    {
        return view('base.object');
    }

    public function section()
    {
        return view('base.section');
    }
    
    Public function micro(){
        return view('base.micro');
    }
     Public function nidhi(){
        return view('base.nidhi');
    }
}

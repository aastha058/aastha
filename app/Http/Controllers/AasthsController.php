<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AasthsController extends Controller
{
        public function login()
    {
        return view('login');
    }
    public function welcome()
    {
        return view('welcome');
    }
    public function index()
    {
        return view('index');
    }
    public function index1()
    {
        return view('index1');
    }
    public function index2()
    {
        return view('index2');
    }
    public function index3()
    {
        return view('index3');
    }
    public function home()
    {
        return view('home');
    }
}

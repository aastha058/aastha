<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AasthsController extends Controller
{
        public function login()
    {
        return view('parent1.login');
    }
    public function welcome()
    {
        return view('welcome');
    }
    public function index()
    {
        return view('parent1.index');
    }
    public function index1()
    {
        return view('parent1.index1');
    }
    public function index2()
    {
        return view('parent1.index2');
    }
    public function index3()
    {
        return view('parent1.index3');
    }
    public function home()
    {
        return view('parent1.home');
    }
}

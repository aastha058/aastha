<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaxController extends Controller
{
    public function index()
    {
        return view('contactUs');
    }
    
    public function new()
    {
        return view('new');
    }
    public function serviceitr()
    {
        return view('serviceitr');
    }
    public function Gst()
    {
        return view('gst');
    }
    public function Return()
    {
        return view('return');
    }
    public function Income()
    {
        return view('Income');
    }
    public function Tds()
    {
        return view('Tds');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaxController extends Controller
{
    public function index()
    {
        return view('parent.contactUs');
    }
    
    public function new()
    {
        return view('parent.new');
    }
    public function serviceitr()
    {
        return view('parent.serviceitr');
    }
    public function Gst()
    {
        return view('parent.gst');
    }
    public function Return()
    {
        return view('parent.return');
    }
    public function Income()
    {
        return view('parent.Income');
    }
    public function Tds()
    {
        return view('parent.Tds');
    }
}

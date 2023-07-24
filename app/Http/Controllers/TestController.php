<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TestController extends Controller
{
    public function home()
    {
        Session::put('active', 'home');
        return view('home');
    }
    public function about()
    {
        Session::put('active', 'about');
        return view('about');
    }
    public function project()
    {
        Session::put('active', 'project');
        return view('project');
    }
}

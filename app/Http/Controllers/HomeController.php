<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view("frontlayout/index");
    }
    public function contact()
    {
        return view("frontlayout/contact");
    }
    public function about()
    {
        return view("frontlayout.about");
    }
    public function login()
    {
        return view("frontlayout.login");
    }
    public function register()
    {
        return view("frontlayout.register");
    }
}

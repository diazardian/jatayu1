<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{

    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function serv1()
    {
        return view('serv1');
    }

    public function serv2()
    {
        return view('serv2');
    }

    public function serv3()
    {
        return view('serv3');
    }

    public function serv4()
    {
        return view('serv4');
    }

    public function contact() {
        return view('contact');
    }

    public function portofolio() {
        return view('portofolio');
    }
}

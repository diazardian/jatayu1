<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutControl extends Controller
{
    public function index()
    {
        return view('about', [
            'dump' => 0
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortofolioControl extends Controller
{
    public function index()
    {
        return view('portofolio', [
            'dump' => 0
        ]);
    }
}

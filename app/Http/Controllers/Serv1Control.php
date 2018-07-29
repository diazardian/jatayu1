<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Serv1Control extends Controller
{
    public function index()
    {
        return view('serv1', [
            'dump' => 0
        ]);
    }
}

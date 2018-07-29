<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Serv3Control extends Controller
{
    public function index()
    {
        return view('serv2', [
            'dump' => 0
        ]);
    }
}

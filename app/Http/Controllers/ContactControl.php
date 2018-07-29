<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactControl extends Controller
{
    public function index()
    {
        return view('contact', [
            'dump' => 0
        ]);
    }
}

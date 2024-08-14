<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HijosController extends Controller
{
    public function hijos()
    {
        return view('hijos');
    }
}
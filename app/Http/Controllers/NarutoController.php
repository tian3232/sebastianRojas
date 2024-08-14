<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NarutoController extends Controller
{
    public function naruto()
    {
        return view('naruto');
    }
}
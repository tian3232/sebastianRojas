<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HinataController extends Controller
{
    public function hinata()
    {
        return view('hinata');
    }
}
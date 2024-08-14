<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SakuraController extends Controller
{
    public function sakura()
    {
        return view('sakura');
    }
}
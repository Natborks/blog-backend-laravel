<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPages extends Controller
{
    //
    public function home () {

        return view('staticPages/home');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function Page(){
        return view('Page');
    }

    public function chisiamo(){
        return view('chisiamo');
    }
}

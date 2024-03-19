<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomePageController extends Controller
{ 
    public function index () {
        $time=date("h:i:s");
        return view("welcome", compact("time"));
    }
}

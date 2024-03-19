<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index () {
        $arrayshop = ["Toshiba","Hp","Acer","Dell","Apple"];
        return view("shop", compact("arrayshop"));
    }
}

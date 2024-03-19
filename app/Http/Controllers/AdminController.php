<?php

namespace App\Http\Controllers;

use App\Models\AdminProductsModel;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view("adminadd");
    }
    public function getProducts(){
        $allProducts = AdminProductsModel::all();
        return view("adminprodact", compact("allProducts"));
    }
    public function postProducts(Request $request){
        $request->validate([
            "email"=>"required|string|max:55",
            "description"=>"required|string|max:255",
            "amount"=>"required|numeric",
            "price"=>"required|numeric"
        ]);
        AdminProductsModel::create([
            "name"=>$request->get("email"),
            "description"=>$request->get("description"),
            "amount"=>$request->get("amount"),
            "price"=>$request->get("price")
        ]);
        return redirect("/admin/products");
    }

    
}

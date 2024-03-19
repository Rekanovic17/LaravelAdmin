<?php

namespace App\Http\Controllers;

use App\Models\ContactModel;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return view("contact");
    }
    public function allContact(){
        $allcontact = ContactModel::all();
        return view("admin",compact("allcontact"));
    }
    public function postContact(Request $request){
        $request->validate([
            'email' => 'required|string',
            'description' => 'required|string',
            'message' => 'required|string|min:5',
        ]);
            ContactModel::create([
                "email" => $request->get("email"),                
                "description" => $request->get("description"),
                "message" => $request->get("message")
            ]);

           // dd("Uspjesno upisani podatci");
            return redirect("/");
    }
}

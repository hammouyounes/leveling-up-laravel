<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function create(){
        return view('contact');
    }

    public function store(Request $request){
        $request->validate([
            'email'=>'required|email',
            'message'=>'required|max:500'
        ]);
        Contact::create($request->all());
        return "Contact Crée avec succées";
    }
}

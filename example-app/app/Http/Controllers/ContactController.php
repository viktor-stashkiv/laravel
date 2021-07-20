<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ContactRequest;

use App\Models\Contact;

class ContactController extends Controller
{
    public function submit(ContactRequest $req){
        $contact = new Contact();
        $contact->name = $req->input('name');
        $contact->email = $req->input('email');
        $contact->message = $req->input('message');

        $contact->save();

        return redirect()->route('home')->with('success','Повідомлення відправлено!');
    }

    public function allData(){
        $contact = new Contact;
        return view('messages',['data'=>Contact::all()]);
    }
}

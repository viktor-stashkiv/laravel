<?php

namespace App\Http\Controllers;

use App\Http\Requests\HostelRequest;

use App\Models\Hostel;


use Illuminate\Http\Request;

class AddController extends Controller
{
    public function Add(Request $req){

        $validation = $req->validate([
            'first-name' => 'required|min:2|max:50', 
            'last-name' => 'required|min:2|max:50',
            'name-father' => 'required|min:2|max:50',
            'place-of-residence' => 'required|min:4|max:50',
            'phone-number' => 'required|min:8|max:12',
            'room' => 'required|min:1|max:200',
        ]);

        $hostel = new Hostel(); 
        $hostel->first_name = $req->input('first-name'); 
        $hostel->last_name = $req->input('last-name');
        $hostel->name_father = $req->input('name-father');
        $hostel->place_of_residence = $req->input('place-of-residence'); 
        $hostel->phone_number = $req->input('phone-number');
        $hostel->room = $req->input('room');

        $hostel->save(); 

        return redirect()->route('home')->with('success','Успішно добавлено!');
    }

    public function revision(){
        return view('revision',['data'=>Hostel::all()]);
    }

    public function delete($id){
        Hostel::find($id)->delete();
        return redirect()->route('revision-hostel')->with('success','Запис видалено!');
    }

    public function search(Request $req){
        $contact = new Hostel;
        return view('search',['data'=>$contact->find($req->input('search'))]);
    }
}

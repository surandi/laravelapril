<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $data["user"]= array(
            array("name"=>"Surandi","email"=>"surandi.h@gmail.com","password"=>"123"),
            array("name"=>"Harry","email"=>"yharry@gmail.com","password"=>"123"),
            array("name"=>"Siswanto","email"=>"fr.siswanto@gmail.com","password"=>"123")
            ) ;
        return view("user.index",$data);
    }

    public function create() {
        return view("user.create");
    }

    public function store(Request $request) {

        $validatedData = $request->validate([
             'User Name' => 'required|min:1|max:10',
             'Email' => 'required|min:1',
             'Password' => 'required|min:1|max:10',
        ]);

        //return all data from submited form//
        return $request->all();      

    }
}

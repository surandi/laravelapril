<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index() {
        $data["todos"]= array("Makan Malam","Sikat Gigi","Bobo Malam");
        return view("todo.index",$data);
    }

    public function create() {
        return view("todo.create");
    }

    public function store(Request $request) {

        $validatedData = $request->validate([
            'Title' => 'required|min:10',
            'Description' => 'required|max:20',
        ]);

        //return all data from submited form//
        return $request->all();      

    }

}

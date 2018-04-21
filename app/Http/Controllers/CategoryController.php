<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        $data["categ"]= array("Urgent","Normal","Slow");
        return view("category.index",$data);
    }

    public function create() {
        return view("category.create");
    }

    public function store(Request $request) {

        $validatedData = $request->validate([
             'Description' => 'required|min:1',
        ]);

        //return all data from submited form//
        return $request->all();      

    }
}

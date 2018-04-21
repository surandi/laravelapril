<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function index() {
        $data["toeat"]=array("Pastel","Lumpia","Otak Otak");
        return view ("food.index",$data);        
    }

    public function create() {
        return view("food.create");
    }

    public function store (Request $request) {
        $validatedData = $request->validate([
            'Food Name' => 'required|min:1',        
        ]);

        //return all data from submited form//
        return $request->all();    
    }
}

<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get("TODO1", function() {
    $data["todos"]= array("Bangun","Sikat Gigi","Mandi","Sarapan");
    return view("sr",$data);
});

Route::get("TODO2","ToDoController@Index");


Route::get("food","FoodController@index");
Route::get("food/create","FoodController@create");
Route::post("food","FoodController@store");

Route::get("TODO","ToDoController@index");
Route::get("todo/create","ToDoController@create");
Route::post("todo","ToDoController@store");

Route::get("category","CategoryController@index");
Route::get("category/create","CategoryController@create");
Route::post("category","CategoryController@store");

Route::get("user","UserController@index");
Route::get("user/create","UserController@create");
Route::post("user","UserController@store");
<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/pizzas', function () {
    //in some instances this is where data is feteched before passong it to the view
    $pizzas = [
        ["type"=>"Hawaiin","base"=>"Cheesy Crust","price" => 10],
        ["type"=>"Peruvian","base"=>"Garlic Crust","price" => 30],
        ["type"=>"Mexican","base"=>"Ginger Crust","price" => 20]
    ];
    return view('pizzas',['pizzas' => $pizzas]);
});

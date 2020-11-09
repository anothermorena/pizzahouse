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
    $pizza = [
        "type"=>"Hawaiin",
        "base"=>"Crusty Base",
        "price" => 10
    ];
    return view('pizzas',$pizza);
});

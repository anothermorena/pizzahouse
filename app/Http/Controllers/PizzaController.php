<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;

class PizzaController extends Controller{

    //this is for the / route --> to get the index view/page
    public function index(){

        //$pizzas = Pizza::all();
        //$pizzas = Pizza::orderBy('name','asc')->get();
        $pizzas = Pizza::where('type','Hawaiin')->get();

        return view('pizzas.index',[

            'pizzas' => $pizzas,
            'name' => request('name'), //this is how we obtain query parameters from the URL
            'age' => request('age')

        ]);

    }

    public function show($id){

      return view('pizzas.show',['id'=> $id]);
    }

    public function create(){

        return view('pizzas.create');
    }

}

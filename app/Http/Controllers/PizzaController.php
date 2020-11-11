<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;

class PizzaController extends Controller{

    //this is for the / route --> to get the index view/page
    public function index(){

        $pizzas = Pizza::all();
        //$pizzas = Pizza::orderBy('name','asc')->get();
        //$pizzas = Pizza::where('type','Hawaiin')->get();


        return view('pizzas.index',[

            'pizzas' => $pizzas,
            'name' => request('name'), //this is how we obtain query parameters from the URL
            'age' => request('age')

        ]);

    }

    public function show($id){
        //get one record by ID
        //$pizza = Pizza::find($id);

        //if the supplied id doesnt have a record, fail, show 404
        $pizza = Pizza::findOrFail($id);

      return view('pizzas.show',['pizza'=> $pizza]);
    }

    public function create(){

        return view('pizzas.create');
    }

}

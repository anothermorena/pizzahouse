<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller{

    //this is for the / route --> to get the index view/page
    public function index(){
        $pizzas = [
            ["type"=>"Hawaiin","base"=>"Cheesy Crust","price" => 10],
            ["type"=>"Peruvian","base"=>"Garlic Crust","price" => 30],
            ["type"=>"Mexican","base"=>"Ginger Crust","price" => 20]
        ];


        return view('pizzas',[

            'pizzas' => $pizzas,
            'name' => request('name'), //this is how we obtain query parameters from the URL
            'age' => request('age')

        ]);

    }

    public function show($id){
    //use the $id variable to query the database for a record
      return view('details',['id'=> $id]);
    }

}

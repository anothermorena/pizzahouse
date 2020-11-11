@extends('layouts.layout')

@section('content')

<div class='wrapper pizza-details'>

    <h1>Order For {{$pizza->name}}</h1>
    <p class='type'> Type- {{$pizza->type}} </p>
    <p class='base'> Base- {{$pizza->base}} </p>
</div>
<p class="toppings">Extra toppings:</p>
<ul>
    @foreach($pizza->toppings as $topping)
      <li>{{ $topping }}</li>
    @endforeach
  </ul>

<a href="/pizzas" class="back"> <- Back To All Pizzas <a/>
@endsection


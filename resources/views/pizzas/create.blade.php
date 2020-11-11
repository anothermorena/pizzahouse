@extends('layouts.layout')

@section('content')
<div class="wrapper create-pizza">
  <h1>Create a New Pizza</h1>
  <form action="/pizzas" method="POST">
    @csrf
    <label for="name">Your name:</label>
    <input type="text" name="name" id="name" required>
    <label for="type">Choose type of pizza:</label>
    <select name="type" id="type">
      <option value="Margarita">Margarita</option>
      <option value="Hawaiian">Hawaiian</option>
      <option value="Veg supreme">Veg Supreme</option>
      <option value="Volcano">Volcano</option>
    </select>
    <label for="base">Choose crust:</label>
    <select name="base" id="base">
      <option value="Thick">Thick</option>
      <option value="Thin & crispy">Thin & Crispy</option>
      <option value="Cheese crust">Cheese Crust</option>
      <option value="Garlic crust">Garlic Crust</option>
    </select>
    <fieldset>
      <label>Extra toppings:</label> <br />
      <input type="checkbox" name="toppings[]" value="Mushrooms">Mushrooms<br />
      <input type="checkbox" name="toppings[]" value="Peppers">Peppers<br />
      <input type="checkbox" name="toppings[]" value="Garlic">Garlic<br />
      <input type="checkbox" name="toppings[]" value="Olives">Olives<br />
    </fieldset>
    <input type="submit" value="Order Pizza">
  </form>
</div>
@endsection

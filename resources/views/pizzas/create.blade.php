@extends('layouts.layout')

@section('content')

<div class="wrapper create-pizza">
    <h1>Create a new Pizza</h1>
    <form action="/pizzas" method="POST">
        @csrf
        <label for="name">Your Name:</label>
        <input type="text" id='name' name="name">
        <label for="type">Chhose Pizza type:</label>
        <select name="type" id="type">
            <option value="margarita">Margarita</option>
            <option value="hawaiien">Hawaiien</option>
            <option value="veg supreme">Veg Suprime</option>
            <option value="volacno">Volcano</option>
        </select>

        <label for="base">Chhose Pizza base:</label>
        <select name="base" id="base">
                <option value="cheesy croset">cheesy croset</option>
                <option value="garlic croset">garlic croset</option>
                <option value="thin and crispy">thin and crispy</option>
                <option value="thick">thick</option>
            </select>

            <fieldset>
                <label>Extra Topping:</label>
                <input type="checkbox" name="toppings[]" value="mushrooms">Mushrooms<br>
                <input type="checkbox" name="toppings[]" value="peppers">peppers<br>
                <input type="checkbox" name="toppings[]" value="garlic">garlic<br>
                <input type="checkbox" name="toppings[]" value="olives">olives<br>
            </fieldset>

            <input type="submit" value="Order Pizza">
    </form>
</div>


@endsection

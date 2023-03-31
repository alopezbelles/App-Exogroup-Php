<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;
use Illuminate\Support\Facades\DB;



class PizzaController extends Controller
{
            // To show all pizzas

    public function index()
    {
        $pizzas = Pizza::all('name');
        return $pizzas;
    }

    public function showIngredients(Request $request, $id)
    {
        $pizza = Pizza::select('pizzas.*', 'ingredients.name as ingredient_name', 'ingredients.cost_price')
            ->join('pizza_ingredients', 'pizzas.id', '=', 'pizza_ingredients.pizza_id')
            ->join('ingredients', 'ingredients.id', '=', 'pizza_ingredients.ingredient_id')
            ->where('pizzas.id', '=', $id)
            ->get();

        return response()->json($pizza);
    }

    
}

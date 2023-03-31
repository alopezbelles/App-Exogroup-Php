<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PizzaIngredient;

class PizzaIngredientsController extends Controller
{
    public function addIngredientToPizza(Request $request)
    {
        $pizzaId = $request->input('pizza_id');
        $ingredientId = $request->input('ingredient_id');
        
        $pizzaIngredient = new PizzaIngredient;
        $pizzaIngredient->pizza_id = $pizzaId;
        $pizzaIngredient->ingredient_id = $ingredientId;
        $pizzaIngredient->save();
        
        // return redirect()->back()->with('success', 'Ingrediente agregado.');
    }
}

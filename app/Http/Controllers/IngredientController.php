<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ingredient;


class IngredientController extends Controller
{
    public function index()
    {
        $ingredients = Ingredient::select('id', 'name', 'cost_price')->get();
        return $ingredients;
    }
}

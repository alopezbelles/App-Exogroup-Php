<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;


class PizzaController extends Controller
{
    public function index()
{
    $pizzas = Pizza::all('name');
    return $pizzas;
}
}
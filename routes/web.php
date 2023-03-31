<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Get all pizzas
// Route::get('/pizzas', [PizzaController::class, 'index']);
Route::get('/pizzas', [App\Http\Controllers\PizzaController::class, 'index']);

//Get all ingredients
Route::get('/ingredients', [App\Http\Controllers\IngredientController::class, 'index']);


//Get pizza by id, metodo GET
Route::get('/pizzas/{id}/ingredients', 'PizzaController@showIngredients');


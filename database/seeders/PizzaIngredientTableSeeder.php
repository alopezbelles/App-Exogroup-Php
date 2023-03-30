<?php


// namespace Database\Seeders;
// use App\Models\Pizza;
// use App\Models\Ingredient;


// //Esto lo podre borrar
// use Illuminate\Database\Seeder;
// use Illuminate\Support\Facades\DB;



namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pizza;
use App\Models\Ingredient;

class PizzaIngredientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // The Fun Pizza, pizza nº1 
        $pizza1 = Pizza::find(1);
        $ingredient1 = Ingredient::find(1);
        $ingredient2 = Ingredient::find(4);
        $ingredient3 = Ingredient::find(2);
        $ingredient4 = Ingredient::find(5);
        $ingredient5 = Ingredient::find(6);
        $ingredient6 = Ingredient::find(7);
        $ingredient7 = Ingredient::find(3);
        $pizza1->ingredients()->attach([$ingredient1->id, $ingredient2->id, $ingredient3->id, $ingredient4->id, $ingredient5->id, $ingredient6->id, $ingredient7->id]);

        // The Super Mushroom, pizza nº2
        $pizza2 = Pizza::find(2);
        $ingredient1 = Ingredient::find(1);
        $ingredient2 = Ingredient::find(8);
        $ingredient3 = Ingredient::find(7);
        $ingredient4 = Ingredient::find(4);
        $ingredient5 = Ingredient::find(3);
        $pizza2->ingredients()->attach([$ingredient1->id, $ingredient2->id, $ingredient3->id, $ingredient4->id, $ingredient5->id]);
    }
}
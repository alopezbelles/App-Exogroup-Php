<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Ingredient;

class IngredientsTableSeeder extends Seeder
{
    
    public function run(): void
    {
        Ingredient::create([
            'name' => 'tomato',
            'cost_price' => 0.5,
        ]);

        Ingredient::create([
            'name' => 'feta cheese',
            'cost_price' => 1.0,
        ]);

        Ingredient::create([
            'name' => 'oregano',
            'cost_price' => 1.0,
        ]);
        Ingredient::create([
            'name' => 'sliced mushrooms',
            'cost_price' => 0.5,
        ]);
        Ingredient::create([
            'name' => 'sausages',
            'cost_price' => 1.0,
        ]);
        Ingredient::create([
            'name' => 'sliced onion',
            'cost_price' => 0.5,
        ]);
        Ingredient::create([
            'name' => 'mozzarella cheese',
            'cost_price' => 0.5,
        ]);
        Ingredient::create([
            'name' => 'bacon',
            'cost_price' => 1.0,
        ]);
        
    }
}

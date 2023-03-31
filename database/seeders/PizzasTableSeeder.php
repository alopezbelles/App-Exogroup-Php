<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pizza;


class PizzasTableSeeder extends Seeder
{
    
    public function run(): void
    {
        Pizza::create([
            'name' => 'The Fun Pizza',
            'selling_price' => 7.5,
        ]);
        Pizza::create([
            'name' => 'The Super Mushroom',
            'selling_price' => 5.25,
        ]);
        Pizza::create([
            'name' => 'Margarita',
            'selling_price' => 10,
        ]);
    }
}

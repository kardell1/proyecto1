<?php

namespace Database\Seeders;

use App\Models\Size;
use App\Models\Color;
use App\Models\Product;
use App\Models\Material;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   
        //tenemos que declarar el factory aqui , para que se haga la relacion de uno a muchos con el usuario 
        $products=Product::factory(70)->create();
        // $colorSeeder=new ColorSeeder();
        //NOTAA.- para una relacion de uno a muchos igual se necesita una tabla pivot
        foreach($products as $product){
            $product->colors()->attach([Color::all()->random()->id , Color::all()->random()->id]);
            $product->materials()->attach([Material::all()->random()->id , Material::all()->random()->id]);
            $product->sizes()->attach([Size::all()->random()->id , Size::all()->random()->id]);
        }
    }
}


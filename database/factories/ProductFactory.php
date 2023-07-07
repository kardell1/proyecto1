<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //en aca el retorno es de la informacion falsa donde se pone el campo que se quiera q se retorne , en este caso queremos que nos retorne el producto
            'name' => fake()->word() ,
            'price' => fake()->randomNumber(3)
            //aca podriamos añadir los demas campos que le faltan a la tabla de productos
        ];
    }
}

<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use Database\Seeders\SizeSeeder;
use Database\Seeders\ColorSeeder;
use Database\Seeders\MaterialSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        //NOta.- aca declaramos la llamada a los archivos seeder o factoryes , tambien tomar nota de que al llamar al seeder tambien debemos importar la clase a este archivo 
        //LLamado de factoryes
        
        
        
        //LLamado de seeders
        //el factory de propucto se esta iniciando dentro del seeder del color
       
        $this->call(ColorSeeder::class);
        $this->call(MaterialSeeder::class);
        $this->call(SizeSeeder::class); 
        $this->call(ProductSeeder::class);
        $this->call(UserSeeder::class);
        //NOTA.- tambien es importante el orden de declaracion en este campo por las relaciones de las tablas pivot
        //las tablas pivot son tablas que normalizan la relacion de muchos a muchos


    }
}

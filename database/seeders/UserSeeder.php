<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users=User::factory(35)->create();
        // a cada usuario le añadimos un id random de algun prodcuto
        foreach($users as $user){
            $user->products()->attach([Product::all()->random()->id,Product::all()->random()->id,Product::all()->random()->id]);
        }
    }
}

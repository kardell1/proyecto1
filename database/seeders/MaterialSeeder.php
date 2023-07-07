<?php

namespace Database\Seeders;

use App\Models\Material;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $material = new Material();
        $material->material='gamuza';
        $material->save();

        $material = new Material();
        $material->material='cuero';
        $material->save();

        $material = new Material();
        $material->material='sintetico';
        $material->save();

        $material = new Material();
        $material->material='tela';
        $material->save();

        $material = new Material();
        $material->material='random';
        $material->save();
    }
}

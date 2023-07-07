<?php

namespace Database\Seeders;

use App\Models\Color;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ColorSeeder extends Seeder
{
    // una vez declarado el seeder es necesario ponerlo en el archivo DatabaseSeeder
    public function run(): void
    {
        // para usar el seeder es necesario importar el modelo
        $color = new Color();
        $color->color='amarillo';
        $color->save();

        $color = new Color();
        $color->color='rojo';
        $color->save();

        $color = new Color();
        $color->color='negro';
        $color->save();

        $color = new Color();
        $color->color='azul';
        $color->save();

        $color = new Color();
        $color->color='verde';
        $color->save();

        $color = new Color();
        $color->color='cafe';
        $color->save();
    }
}

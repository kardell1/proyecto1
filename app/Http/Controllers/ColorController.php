<?php

namespace App\Http\Controllers;

use App\Models\Color;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    //
    public function colors(){
        //como estamos paginando los productos , el paginate es un metodo que no se puede poner con all ya que paginate es el resultado de una consulta 
        $colors = Color::all();
        //nota... la vista tiene que tener el mismo nombre de home
        return view('color' , compact('colors'));

    }

    public function show($variable){
        $colors = Color::where( 'color' ,$variable)->first();
        return view('color_product' , compact('colors'));
    }
}

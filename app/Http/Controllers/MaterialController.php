<?php

namespace App\Http\Controllers;

use App\Models\Material;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    //
     public function materials(){
      
        $materials = Material::all();
        return view('material' , compact('materials'));

    }

    public function show($variable){
        $materials = Material::where( 'material' ,$variable)->first();
        return view('material_product' , compact('materials'));
    }
}

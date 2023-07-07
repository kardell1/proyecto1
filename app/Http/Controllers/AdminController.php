<?php

namespace App\Http\Controllers;

use App\Models\Size;
use App\Models\Color;
use App\Models\Product;
use App\Models\Material;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //

    public function create(){
        //como estamos paginando los productos , el paginate es un metodo que no se puede poner con all ya que paginate es el resultado de una consulta 
        $colors = Color::all();
        $materials = Material::all();
        $sizes = Size::all();
        //nota... la vista tiene que tener el mismo nombre de home
        return view('create' , compact('colors' , 'materials' , 'sizes'));
        
    }


    



    public function createee()
{
    $colors = Color::all(); // Obtener todos los colores desde la base de datos
    return view('create', ['colors' => $colors]);
}


    public function store(Request $request){
        // estos datos necesitan una validacion para que el usuario no meta cualquier cosa en la base de datos 
        $request->validate([
            'name'=>'required|max:25',
            'price'=>'required',
            'colors'=>'array'
        ]);
        // para guardar los datos en la base de datos  tenemos que iniciar un objeto y poner los valores obtenidos 
        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->save();     
        // en aca usamos su relacion de muchos a muchos para hacer la relacion y guardar los datos recuperados del request
        $colors = $request->input('colors', []);
        $product->colors()->sync($colors); 
        $sizes = $request->input('sizes', []);
        $product->sizes()->sync($sizes); 
        $materials = $request->input('materials', []);
        $product->materials()->sync($materials); 


        return redirect()->route('products.product');
    }



}

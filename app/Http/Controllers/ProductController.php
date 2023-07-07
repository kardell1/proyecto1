<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    //
    public function product(){
        //como estamos paginando los productos , el paginate es un metodo que no se puede poner con all ya que paginate es el resultado de una consulta 
        $products = Product::paginate(12);
        //nota... la vista tiene que tener el mismo nombre de home
        return view('product' , compact('products'));

    }

    public function show($variable){
        $product = Product::find($variable);

        return view('show' , compact('product'));
    }
    // funcion para eliminar un registro 
    public function destroy($id){
    $product = Product::findOrFail($id);
    $product->delete();
    return redirect()->route('products.product');
    }

    
    public function update(Request $request, $id){
    
    $request->validate([
        'name' => 'required|max:25',
        'price' => 'required'
    ]);

    $product = Product::findOrFail($id);

    $product->name = $request->name;
    $product->price = $request->price;
    $product->save();

    return redirect()->route('products.show', $product->id);
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\Size;
use Illuminate\Http\Request;

class SizeController extends Controller
{
    //
    public function sizes(){
        $sizes = Size::all();
       
        return view('size' , compact('sizes'));

    }

    public function show($variable){
        $sizes = Size::where( 'size' ,$variable)->first();
        return view('size_product' , compact('sizes'));
    }
}

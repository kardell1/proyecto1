<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OptionsController extends Controller
{
    public function options(){
        
        return view('options');
        //una manera de abreviar el arreglo que le pasamos a la vista es poniendo el metodo compact('users')
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //aca va la logica de consultas
    //una funciona llamada index devuelve todos los elementos de una recurso  
    public function index(){
        $users = User::all();
        return view('users' , ['users'=>$users]);
        //una manera de abreviar el arreglo que le pasamos a la vista es poniendo el metodo compact('users')
    }
    //vistas , podemos devolver esto en una vista de blade
}

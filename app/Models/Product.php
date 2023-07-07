<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// aca definimos la relacion muchos a muchos 
// se crea una funcion y se hace la respectiva relacion
class Product extends Model
{
    use HasFactory;

    public function colors(){
        return $this->belongsToMany(Color::class);
    }
    public function materials(){
        return $this->belongsToMany(Material::class);
    }
    public function sizes(){
        return $this->belongsToMany(Size::class);
    }
    public function users(){
        return $this->belongsToMany(User::class);
    }
}

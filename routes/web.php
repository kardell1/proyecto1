<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SizeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\OptionsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MaterialController;



Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('options');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/users', [UserController::class , 'index'])->name('user.users');

Route::get('/options', [OptionsController::class , 'options'])->name('options.option');

Route::get('/products', [ProductController::class , 'product'])->name('products.product');
// ahora definimos una ruta donde se busque un id
Route::get('/products/{product} ', [ProductController::class , 'show'])->name('products.show') ;
//ruta para crear un producto
Route::get('/create', [AdminController::class , 'create'])->name('Admin.create') ;


Route::post('/products', [AdminController::class , 'store'])->name('Admin.store') ;
//ruta para eliminar un producto
Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');
//ruta para actualizar un producto
Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');



// aumentar 3 rutas, colores , tallas y materiales
Route::get('/colors', [ColorController::class , 'colors'])->name('colors.color');

Route::get('/colors/{color}', [ColorController::class , 'show'])->name('colors.product');


Route::get('/sizes', [SizeController::class , 'sizes'])->name('sizes.size');

Route::get('/sizes/{size}', [SizeController::class , 'show'])->name('sizes.product');


Route::get('/materials', [MaterialController::class , 'materials'])->name('materials.material'); 

Route::get('/materials{material}', [MaterialController::class , 'show'])->name('materials.product'); 
 
// rutas de administracion 

// la vista retorna una direccion  que es admin(csrpeta).index la vista que contiene dentro






Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    
});

require __DIR__.'/auth.php';

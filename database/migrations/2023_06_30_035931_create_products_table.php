<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name',45);
            //para declarar un dato con valor decimal , se le pasa los siguientes parametros('nombre' , maximo numero de digitos dentro , maximo precision del decimal)
            $table->float('price' , 3,0)->nullable();
            // ya que la relacion ha cambiando en la tabla , y se ha vuelto una relacion de uno a muchos , aca se debe declarar las llaves foraneas de las tablas asociadas a este lugar 
            //---------------------------------------------------
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};

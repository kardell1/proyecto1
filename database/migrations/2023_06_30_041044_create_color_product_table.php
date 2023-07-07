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
        Schema::create('color_product', function (Blueprint $table) {
            $table->id();
             //para declarar la llave foranea.- primero creamos el campo
             $table->unsignedBigInteger('color_id')->nullable();
             //luego a este campo le ponemos el estado de ser llave foranea
             $table->foreign('color_id')->references('id')->on('colors')->onUpdate('cascade')->onDelete('set null');
             //con esto ya hemos terminado de declarar la primera llave foranea.- set null significa que cuando se borre no pase nada
             //-------------------------------------------------
             $table->unsignedBigInteger('product_id')->nullable();
             $table->foreign('product_id')->references('id')->on('products')->onUpdate('cascade')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('color_product');
    }
};

<?php

namespace Database\Seeders;

use App\Models\Size;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $size = new Size();
        $size->size='M';
        // $size->product_id=Product::all()->random()->id;
        $size->save();
         
        $size = new Size();
        $size->size='L';
        $size->save();

        $size = new Size();
        $size->size='S';
        $size->save();

        $size = new Size();
        $size->size='XL';
        $size->save();

        $size = new Size();
        $size->size='LL';
        $size->save();
         
    }
}

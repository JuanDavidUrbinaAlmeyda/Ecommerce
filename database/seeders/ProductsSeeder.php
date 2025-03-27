<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Products;
class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $product1=new Products();
        $product1->name='Product 1';
        $product1->description='Descripción del producto 1';
        $product1->price=100;
        $product1->category_id=1;
        $product1->save();

        $product2=new Products();
        $product2->name='Product 2';
        $product2->description='Descripción del producto 2';
        $product2->price=200;
        $product2->category_id=2;
        $product2->save();

    }
}

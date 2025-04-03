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
        $product1->url_image='https://olimpica.vtexassets.com/arquivos/ids/1287038/197497161786-1.jpg?v=638412068654670000';
        $product1->category_id=1;
        $product1->save();

        $product2=new Products();
        $product2->name='Product 2';
        $product2->description='Descripción del producto 2';
        $product2->price=200;
        $product2->url_image='https://m.media-amazon.com/images/I/61goypdjAYL.jpg';
        $product2->category_id=2;
        $product2->save();

    }
}

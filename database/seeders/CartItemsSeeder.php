<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CartItems;

class CartItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cartitem1=new CartItems();
        $cartitem1->product_id=1;
        $cartitem1->quantity=1;
        $cartitem1->user_id=1;
        $cartitem1->save();

        $cartitem2=new CartItems();
        $cartitem2->product_id=2;
        $cartitem2->quantity=2;
        $cartitem2->user_id=2;
        $cartitem2->save();

    }
}

<?php

namespace Database\Seeders;

use App\Models\CartItems;
use App\Models\Category;
use App\Models\Products;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            CategorySeeder::class,
            ProductsSeeder::class,
            CartItemsSeeder::class,

        ]);
        User::factory(100)->create();
        Category::factory(100)->create();
        Products::factory(100)->create();
        CartItems::factory(100)->create();
    }
}

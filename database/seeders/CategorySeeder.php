<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category1=new Category();
        $category1->name='Electronics';
        $category1->description='Everything in Electronics';
        $category1->save();

        $category2=new Category();
        $category2->name='Computers';
        $category2->description='Everything in Computers';
        $category2->save();
    }
}

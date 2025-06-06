<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Products;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductsFactory extends Factory
{
    protected $model = Products::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>fake()->word(),
            'description'=>fake()->paragraph(),
            'price'=>fake()->numberBetween(100,1000),
            'url_image'=>'https://olimpica.vtexassets.com/arquivos/ids/1287038/197497161786-1.jpg?v=638412068654670000',
            'category_id'=>fake()->numberBetween(1,100),
        ];
    }
}

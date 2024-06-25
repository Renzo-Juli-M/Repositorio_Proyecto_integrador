<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\product>
 */
class productFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $text=$this->faker->unique->sentence();
        return [
            'name'=>$text,
            'slug'=>Str::slug($text),
            'descripcion'=>$this->faker->paragraph(),
            'available'=>$this->faker->numberBetween(5,50),
            'price'=>$this->faker->randomFloat(2.50,5000),
            'category_id'=>Category::all()->random()->id
        ];
    }
}

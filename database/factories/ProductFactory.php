<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Attribute;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{

    public function definition()
    {
        $category = DB::table('categories')->inRandomOrder()->first();
        $channel = DB::table('channels')->inRandomOrder()->first();
        $name = fake()->streetName();
        return [
            'category_id' => $category->id,
            'channel_id' => $channel->id,
            'name' => $name,
            'slug' => str($name)->slug(),
            'description' => fake()->text(rand(300, 500)),
            'viewed' => rand(20, 100),
            'favorites' => rand(0, 30),
            'random' => rand(0, 999),
        ];
    }
}

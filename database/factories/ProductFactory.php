<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $products = [
            'Laptop',
            'Smartphone',
            'Desk Chair',
            'Coffee Mug',
            'Headphones',
            'Backpack',
            'Notebook',
            'Water Bottle',
            'Keyboard',
            'Mouse',
            'Monitor',
            'Table Lamp',
            'Sofa',
            'Shoes',
            'Watch',
        ];
        $name = $this->faker->randomElement($products);
        return [
            //
            'name' => $name,
            'slug' => Str::slug($name . '-' . uniqid()),
            'price' => $this->faker->randomFloat(2, 10, 2000), // 2 decimals, between 10–2000
            'user_id' => User::inRandomOrder()->first()->id,
            'stock' => $this->faker->numberBetween(0, 100),
            // 'theme' => $this->faker->randomElement(['default', 'dark', 'modern', 'nova']),
            'theme' => 'default',
        ];
    }
}

<?php

namespace Database\Factories;

use App\Users\Models\Collection;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Model>
 */
class CollectionFactory extends Factory
{
    protected $model = Collection::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'hash' => uniqid(),
            'name' => fake()->words(5,true),
            'description' => fake()->paragraph(),  
        ];
    }
}

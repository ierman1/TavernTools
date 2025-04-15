<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Resources\Models\Resource;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Resources\Models\Resource>
 */
class ResourceFactory extends Factory
{
    protected $model = Resource::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'hash' => uniqid(),
            'name' => fake()->words(5, true),
            'description' => fake()->paragraph(),
            'resourceable_type' => 'App\Resources\Models\Resource',
            'resourceable_id' => 1,
        ];
    }
}

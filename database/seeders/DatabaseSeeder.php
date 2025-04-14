<?php

namespace Database\Seeders;

use App\Users\Models\User;
use App\Resources\Models\Resource;
use App\Resources\Models\Sheet;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        //User::factory(10)->create();
        Resource::factory(10)->create([
            'creator_id' => 1,
            'resourceable_type' => Sheet::class,

        ])->each(function ($resource) {
            $resource->resourceable()->save(Sheet::factory()->create());
        });

        
    }
}

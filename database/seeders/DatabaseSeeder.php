<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Classification;
use App\Models\Feature;
use App\Models\Product;
use App\Models\Type;
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
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('12345678'),
        ]);

        Classification::factory()->count(100)->create();
        Type::factory()->count(100)->create();
        Brand::factory()->count(10)->create();
        Product::factory()->count(40)->create();
    }
}

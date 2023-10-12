<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AdminUser;
use App\Models\PartType;
use App\Models\Brand;
use App\Models\Product;

use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        AdminUser::factory(1)->create([
            'name' => 'Admin',
            'email' => 'laravel@laravel.com',
            'password' => bcrypt('12345'),
        ]);

        User::factory(10)->create();

        Brand::factory(10)->create();

        PartType::factory(10)->create();

        Product::factory(100)->create();
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        Category::create([
            'name' => 'SUV',
        ]);

        Category::create([
            'name' => 'Luxury Yacht',
        ]);

        // Add more categories as needed
    }
}
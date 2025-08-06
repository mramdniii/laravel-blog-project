<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
            'color' => 'red'
        ]);

        Category::create([
            'name' => 'UI/UX',
            'slug' => 'ui-ux',
            'color' => 'blue'
        ]);

        Category::create([
            'name' => 'Machine Learning',
            'slug' => 'machine-learning',
            'color' => 'green'
        ]);

        Category::create([
            'name' => 'Data Structur',
            'slug' => 'data-structur',
            'color' => 'yellow'
        ]);
    }
}

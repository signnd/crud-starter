<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create(['nama' => 'Makanan']);
        Category::create(['nama' => 'Perlengkapan Rumah Tangga']);
        Category::create(['nama' => 'Alat Belajar']);
    }
}

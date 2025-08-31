<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Shapmoo',
                'slug' => 'shampoo',
                'description' => 'Ammattilaisshampoot kaikille hiustyypeille',
                'is_active' => true,
            ],
            [
                'name' => 'Coditioners',
                'slug' => 'conditioners',
                'description' => 'Hiustenhoitoon tarkoitetut hoitoaineet ja balsamit',
                'is_active' => true,
            ],
            [
                'name' => 'Masks',
                'slug' => 'masks',
                'description' => 'Tehokkaat hiustenkorjaavat naamiot',
                'is_active' => true,
            ],
            [
                'name' => 'Serums',
                'slug' => 'serums',
                'description' => 'Tiivistetyt hiustenhoitoseerumit',
                'is_active' => true,
            ],
            [
                'name' => 'Sprays',
                'slug' => 'sprays',
                'description' => 'Hiusten muotoilu- ja suojaussuihkeet',
                'is_active' => true,
            ],
            [
                'name' => 'Oils',
                'slug' => 'oils',
                'description' => 'Hiusten ravitsevat ja korjaavat öljyt',
                'is_active' => true,
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}

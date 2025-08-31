<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Brand;

class BrandSeeder extends Seeder
{
    public function run(): void
    {
        $brands = [
            [
                'name' => 'Glossco',
                'slug' => 'glossco',
                'description' => 'Ammattimaiset hiustenhoitotuotteet premium-luokkaa',
                'is_active' => true,
            ],
            [
                'name' => 'Innovatis',
                'slug' => 'innovatis',
                'description' => 'Innovatiiviset ratkaisut hiustenhoitoon',
                'is_active' => true,
            ],
            [
                'name' => 'Kosswell',
                'slug' => 'kosswell',
                'description' => 'Laadukkaat kosmetiikkatuotteet ammattilaisten käyttöön',
                'is_active' => true,
            ],
            [
                'name' => 'Lisap',
                'slug' => 'lisap',
                'description' => 'Italialaiset hiustenhoitotuotteet',
                'is_active' => true,
            ],
            [
                'name' => 'Sinergy',
                'slug' => 'sinergy',
                'description' => 'Tieteen ja luonnon Synerginen vaikutus hiustenhoidossa',
                'is_active' => true,
            ],
        ];

        foreach ($brands as $brand) {
            Brand::create($brand);
        }
    }
}

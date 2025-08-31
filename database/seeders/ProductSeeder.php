<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\ProductTip;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            [
                'name' => 'Reset Clean',
                'slug' => 'reset-clean',
                'description' => 'Reset Clean – Kuorintageeli hiuspohjalle. Syväpuhdistava hoito päänahalle. Reset Clean on päänahan hyvinvointia tukeva kuorintageeli, joka poistaa tehokkaasti epäpuhtaudet, talikertymät ja muotoilutuotteiden jäämät.',
                'article_number' => 'GL1001',
                'brand_id' => 1, // Glossco
                'category_id' => 1, 
                'manufacturing_country' => 'Spain',
                'size' => '250ml',
                'price' => 15.90,
                'in_stock' => false,
                'ingredients' => 'jojobakuorivat helmet, aloe vera, mentoli, glyseriini',
                'usage_instructions' => 'Levitä kostealle päänahalle jakauksittain ennen shampoopesua. Hiero kevyesti pyörivin liikkein. Huuhtele huolellisesti ja jatka pesua shampoolla.',
                'is_active' => true,
                'tips' => [
                    [
                        'title' => 'Tehokkaaseen syväpuhdistukseen“',
                        'content' => 'Käytä Reset Clean -syväpuhdistusta kerran viikossa poistaaksesi päänahasta tehokkaasti kertynyttä likaa ja muotoilutuotteiden jäämiä.',
                        'hair_type' => 'Sopii kaikille hiuksille',
                        'usage_frequency' => 'Kerran viikossa',
                        'best_time' => 'Ennen varsinaista pesua',
                        'additional_notes' => 'Erityisen tehokas rasvaiselle päänahalle ja runsaasti muotoilutuotteita käytettäessä.',
                        'sort_order' => 1,
                    ],
                    [
                        'title' => 'Для проблемной кожи головы',
                        'content' => 'При перхоти или раздражении кожи головы используйте средство 2-3 раза в неделю, массируя кожу легкими круговыми движениями.',
                        'hair_type' => 'Проблемная кожа головы',
                        'usage_frequency' => '2-3 раза в неделю',
                        'best_time' => 'Утром или вечером',
                        'additional_notes' => 'Не используйте при открытых ранах или сильном раздражении кожи.',
                        'sort_order' => 2,
                    ],
                    [
                        'title' => 'Для подготовки к окрашиванию',
                        'content' => 'За день до окрашивания используйте Reset Clean для удаления всех загрязнений и создания идеальной основы для равномерного нанесения краски.',
                        'hair_type' => 'Все типы волос',
                        'usage_frequency' => 'По необходимости',
                        'best_time' => 'За день до окрашивания',
                        'additional_notes' => 'Это обеспечит более равномерное и стойкое окрашивание.',
                        'sort_order' => 3,
                    ],
                ],
            ],
            [
                'name' => 'Hydra Plus Shampoo',
                'slug' => 'hydra-plus-shampoo',
                'description' => 'Интенсивно увлажняющий шампунь для сухих и поврежденных волос. Содержит гиалуроновую кислоту и кератин для восстановления структуры волос.',
                'article_number' => 'IN2001',
                'brand_id' => 2, // Innovatis
                'category_id' => 1, 
                'manufacturing_country' => 'Italy',
                'size' => '300ml',
                'price' => 18.50,
                'in_stock' => true,
                'ingredients' => 'гиалуроновая кислота, кератин, аргановое масло, витамин E',
                'usage_instructions' => 'Нанесите на влажные волосы, вспеньте и оставьте на 3-5 минут. Тщательно смойте теплой водой.',
                'is_active' => true,
                'tips' => [
                    [
                        'title' => 'Для сухих волос',
                        'content' => 'Используйте Hydra Plus Shampoo 2-3 раза в неделю для интенсивного увлажнения сухих и ломких волос.',
                        'hair_type' => 'Сухие волосы',
                        'usage_frequency' => '2-3 раза в неделю',
                        'best_time' => 'Любое время',
                        'additional_notes' => 'Можно оставить на волосах на 5-10 минут для более глубокого увлажнения.',
                        'sort_order' => 1,
                    ],
                    [
                        'title' => 'Для поврежденных волос',
                        'content' => 'При сильном повреждении используйте шампунь каждый раз при мытье головы в течение месяца для восстановления структуры.',
                        'hair_type' => 'Поврежденные волосы',
                        'usage_frequency' => 'При каждом мытье',
                        'best_time' => 'Любое время',
                        'additional_notes' => 'После месяца использования переходите на обычный режим 2-3 раза в неделю.',
                        'sort_order' => 2,
                    ],
                    [
                        'title' => 'Для зимнего ухода',
                        'content' => 'В холодное время года используйте шампунь чаще для защиты волос от пересыхания и статического электричества.',
                        'hair_type' => 'Все типы волос',
                        'usage_frequency' => '3-4 раза в неделю',
                        'best_time' => 'Зимний период',
                        'additional_notes' => 'Особенно эффективен при использовании в сочетании с увлажняющим кондиционером.',
                        'sort_order' => 3,
                    ],
                ],
            ],
            [
                'name' => 'Keratin Repair Mask',
                'slug' => 'keratin-repair-mask',
                'description' => 'Интенсивная маска с кератином для восстановления поврежденных волос. Заполняет поврежденные участки и восстанавливает естественную структуру.',
                'article_number' => 'KW3001',
                'brand_id' => 3, // Kosswell
                'category_id' => 3, 
                'manufacturing_country' => 'Germany',
                'size' => '200ml',
                'price' => 22.00,
                'in_stock' => true,
                'ingredients' => 'кератин, протеины шелка, масло жожоба, пантенол',
                'usage_instructions' => 'Нанесите на чистые влажные волосы, избегая кожи головы. Оставьте на 15-20 минут, затем тщательно смойте.',
                'is_active' => true,
                'tips' => [
                    [
                        'title' => 'Для химически обработанных волос',
                        'content' => 'Используйте маску каждую неделю для восстановления волос после химической завивки или выпрямления.',
                        'hair_type' => 'Химически обработанные волосы',
                        'usage_frequency' => '1 раз в неделю',
                        'best_time' => 'После мытья',
                        'additional_notes' => 'Можно оставить на ночь для более интенсивного восстановления.',
                        'sort_order' => 1,
                    ],
                    [
                        'title' => 'Для окрашенных волос',
                        'content' => 'Применяйте маску через день после окрашивания для закрепления цвета и восстановления структуры волос.',
                        'hair_type' => 'Окрашенные волосы',
                        'usage_frequency' => 'Через день после окрашивания',
                        'best_time' => 'После окрашивания',
                        'additional_notes' => 'Это поможет сохранить цвет и блеск волос надолго.',
                        'sort_order' => 2,
                    ],
                    [
                        'title' => 'Для профилактики',
                        'content' => 'Используйте маску раз в две недели для поддержания здоровья волос и предотвращения повреждений.',
                        'hair_type' => 'Все типы волос',
                        'usage_frequency' => '1 раз в две недели',
                        'best_time' => 'Любое время',
                        'additional_notes' => 'Регулярное использование обеспечит долгосрочное здоровье волос.',
                        'sort_order' => 3,
                    ],
                ],
            ],
        ];

        foreach ($products as $productData) {
            $tips = $productData['tips'];
            unset($productData['tips']);
            
            $product = Product::create($productData);
            
            foreach ($tips as $tip) {
                $tip['product_id'] = $product->id;
                ProductTip::create($tip);
            }
        }
    }
}

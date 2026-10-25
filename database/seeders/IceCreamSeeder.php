<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Product;

class IceCreamSeeder extends Seeder
{
    public function run(): void
    {
        $category = Category::create([
            'name' => 'Ice Cream'
        ]);

        $items = [
            ['name' => 'Classic Brown', 'color' => 'brown', 'price' => 20.0, 'stock' => 10, 'image' => 'images/1.png'],
            ['name' => 'Oranges', 'color' => 'orange', 'price' => 18.5, 'stock' => 12, 'image' => 'images/2.png'],
            ['name' => 'Classic Blue', 'color' => 'blue', 'price' => 19.0, 'stock' => 8, 'image' => 'images/3.png'],
            ['name' => 'Frozen fruit', 'color' => 'red', 'price' => 15.0, 'stock' => 15, 'image' => 'images/4.png'],
            ['name' => 'Classic pink', 'color' => 'pink', 'price' => 17.0, 'stock' => 14, 'image' => 'images/5.png'],
            ['name' => 'Classic Fruity', 'color' => 'mixed', 'price' => 22.0, 'stock' => 7, 'image' => 'images/6.png'],
            ['name' => 'Classic Oreo', 'color' => 'brown', 'price' => 25.0, 'stock' => 9, 'image' => 'images/7.png'],
            ['name' => 'Classic Pistachio', 'color' => 'green', 'price' => 21.0, 'stock' => 11, 'image' => 'images/8.png'],
            ['name' => 'Classic Fried', 'color' => 'gold', 'price' => 24.0, 'stock' => 6, 'image' => 'images/9.png'],
            ['name' => 'Classic Vanilla', 'color' => 'white', 'price' => 12.0, 'stock' => 20, 'image' => 'images/10.png'],
        ];

        foreach ($items as $item) {
            Product::create([
                'category_id' => $category->id,
                'name' => $item['name'],
                'color' => $item['color'],
                'price' => $item['price'],
                'stock' => $item['stock'],
                'image' => $item['image'],
            ]);
        }
    }
}
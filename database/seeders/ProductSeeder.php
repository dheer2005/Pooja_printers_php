<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run():void
    {
        $Product = [

        [
            'name' => 'Invitation Card',
            'image' => '/img/Card_1.jpg',
            'price' => 49
        ],
        [
            'name' => 'Diwali Posters',
            'image' => '/img/Diwali_1.webp',
            'price' => 99
        ],
        [
            'name' => 'Letterhead',
            'image' => '/img/Holi_1.jpg',
            'price' => 110
        ],
    ]; foreach ($Product as $key => $value) {
        Product::create($value);
}
    }
}
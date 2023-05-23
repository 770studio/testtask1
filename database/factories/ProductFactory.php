<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition(): array
    {
        $products = [
            "подготовительные и демонтажные работы",
            "устройство перегородок",
            "штукатурные работы",
            "плиточные работы",
            "малярные работы",
            "облицовка стен декоративными материалами",
            "шумотеплоизоляционные и гидроизоляционные работы",
            "ремонт холодильника",

        ];

        shuffle($products);


        return [
            "uuid" => fake()->uuid,
            "name" => "за услугу " . head($products),
            "price" => rand(1, 1000),
            "currency" => "грн"
        ];
    }
}

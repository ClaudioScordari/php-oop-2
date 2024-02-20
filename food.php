<?php
require_once __DIR__ . '/product.php';
require_once __DIR__ . '/category.php';

class Food extends Product
{
    public $ingredients; // ingredienti
    public $digestibility; // digeribilità

    public function __construct(string $name, float $price, Category $animal, string $img)
    {
        $this->title = $name;
        $this->price = $price;
        $this->category = $animal;
        $this->image = $img;
    }
}

<?php
require_once __DIR__ . '/product.php';

class Kennel extends Product
{
    public function __construct(string $name, float $price, Category $animal, string $img)
    {
        $this->title = $name;
        $this->price = $price;
        $this->category = $animal;
        $this->image = $img;
    }
}

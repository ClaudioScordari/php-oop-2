<?php
require_once __DIR__ . '/product.php';

class Game extends Product
{
    public $safety; // sicurezza
    public $material; // materiale

    public function __construct(string $name, float $price, Category $animal, string $img)
    {
        $this->title = $name;
        $this->price = $price;
        $this->category = $animal;
        $this->image = $img;
    }
}

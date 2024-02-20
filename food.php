<?php
require_once __DIR__ . '/product.php';
require_once __DIR__ . '/category.php';

class Food extends Product
{
    public $ingredients; // ingredienti
    public $digestibility; // digeribilità

    public function __construct(string $name,  $price, Category $animal, string $img)
    {
        $this->title = $name;

        if (is_numeric($price)) {
            $this->price = $price;
        } else {
            throw new Exception('ERRORE del tipo di dato');
        }

        $this->category = $animal;
        $this->image = $img;
    }
}

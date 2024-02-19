<?php
require_once __DIR__ . '/product.php';

class Kennel extends Product
{
    public function __construct(string $name, float $price, string $animal, string $tagImg)
    {
        $this->title = $name;
        $this->price = $price;
        $this->setCategoryIcon($animal);
        $this->setImageProduct($tagImg);
    }
}

// Cuccia per cani
$kennelOne = new Kennel(
    'Casa Accogliente a Zampe',
    20.50,
    'dog',
    '<img alt="cuccia-cane" src="https://m.media-amazon.com/images/I/81mTYtNJ0dL.jpg">'
);

// Cuccia per gatti
$kennelTwo = new Kennel(
    'Regno dei Felini Coccole',
    22.99,
    'cat',
    '<img alt="cuccia-cane" src="https://cdn.maurysonline.it/immagini/6062152_a009220-cuccia-per-gatti-in-legno-con-2-cuscini-e-tiragraffi-rimovibili-bianco-main_510.jpeg">'
);

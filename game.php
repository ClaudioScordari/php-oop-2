<?php
require_once __DIR__ . '/product.php';

class Game extends Product
{
    public $safety; // sicurezza
    public $material; // materiale

    public function __construct(string $name, float $price, string $animal, string $tagImg)
    {
        $this->title = $name;
        $this->price = $price;
        $this->setCategoryIcon($animal);
        $this->setImageProduct($tagImg);
    }
}

// Gioco palla cane
$gameOne = new Game(
    'Palla rimbalzante',
    10.00,
    'dog',
    '<img alt="palla" src="https://m.media-amazon.com/images/I/51yZAEHEJZL.jpg">'
);

// Gioco gomitolo gatto
$gameTwo = new Game(
    'Gomitolo di lana',
    5.00,
    'cat',
    '<img alt="palla" src="https://www.smagatto.it/wp-content/uploads/set-2-gomitoli-colorati-gatti.jpg">'
);

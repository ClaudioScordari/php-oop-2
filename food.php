<?php
require_once __DIR__ . '/product.php';
require_once __DIR__ . '/category.php';

class Food extends Product
{
    public $ingredients; // ingredienti
    public $digestibility; // digeribilità

    public function __construct(string $nameFood, float $price, string $animal, string $tagImg)
    {
        $this->title = $nameFood;
        $this->price = $price;
        $this->setCategoryIcon($animal);
        $this->setImageProduct($tagImg);
    }
}

// Croccantini
$foodOne = new Food(
    'ZampaFelice Bocconcini al Pollo',
    6.50,
    'dog',
    '<img alt="immagine_croccantini" src="https://media.istockphoto.com/id/483452891/it/foto/cibo-per-animali-domestici.jpg?s=612x612&w=0&k=20&c=TrLVzTAt3VZXcbO70T9Eea5T1zjZHwRLdvPFZeMyEC0=">'
);

// Croccantino per gatti
$foodTwo = new Food(
    'Croccantini Felini Deliziosi',
    5.50,
    'cat',
    '<img alt="immagine_croccantini_gatto" src="https://www.my-personaltrainer.it/2021/04/13/cibo-per-gatti_900x760.jpeg">'
);

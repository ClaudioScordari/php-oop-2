<?php
require_once __DIR__ . '/traits/ProductDetails.php';
// Prodotti per animali
class Product
{
    // Proprietà presenti nel singolo prodotto ché in categoria
    public $title;
    public $image;
    public $price;
    public $category;

    // Altri dettagli del prodotto
    use ProductDetails;

    // Funzione che mi setta l'immagine del prodotto
    public function setImageProduct($img)
    {
        $this->image = $img;
    }
}

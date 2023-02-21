<?php

/*
Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
- L'e-commerce vende prodotti per animali.
- I prodotti sono categorizzati, le categorie sono dogs o Gatti.
- Tra i prodotti, troviamo cibo, giochi, cucce, etc.
Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia ecc).
*/

require_once __DIR__ . '/Category.php';

class Product
{
    public $name;
    public $price;
    public $description;
    public $category;
    public $img;

    public function __construct($name, $price, $description, Category $category, $img)
    {
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
        $this->category = $category;
        $this->img = $img;
    }

    public function getPrice()
    {
        return $this->price;
    }
}

$dog = new Category('<i class="fa-solid fa-dog"></i>');
$cat = new Category('<i class="fa-solid fa-cat"></i>');

<?php

/*
Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
- L'e-commerce vende prodotti per animali.
- I prodotti sono categorizzati, le categorie sono dogs o Gatti.
- Tra i prodotti, troviamo cibo, giochi, cucce, etc.
Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia ecc).
*/

require_once __DIR__ . '/Categories.php';

class Product
{
    public $price;
    public $description;
    public $categorie;
    public $img;

    public function __construct($price, $description, Categorie $categorie, $img)
    {
        $this->price = $price;
        $this->description = $description;
        $this->categorie = $categorie;
        $this->img = $img;
    }
}

$dog = new Categorie('<i class="fa-solid fa-dog"></i>');
$cat = new Categorie('<i class="fa-solid fa-cat"></i>');

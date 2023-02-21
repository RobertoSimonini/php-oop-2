<?php

require_once __DIR__ . '/Product.php';

class Article extends Product
{
    public $name;

    public function __construct($price, $description, Categorie $categorie, $img, $name)
    {
        parent::__construct($price, $description, $categorie, $img);

        $this->name = $name;
    }
}

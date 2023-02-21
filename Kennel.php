<?php

require_once __DIR__ . '/Product.php';

class KennelProduct extends Product
{

    public $size;
    public $color;

    public function __construct($name, $price, $description, Category $category, $img, $size, $color)
    {
        parent::__construct($name, $price, $description, $category, $img);

        $this->size = $size;
        $this->color = $color;
    }
}

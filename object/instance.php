<?php

  class Product {

    private $product = [];

    function __construct($product) {
      $this->product = $product;
    }

    public function getProduct() {
      echo $this->product;
    }

    public function addProduct($item) {
      $this->product .=$item;
    }

    public static function getStaticProduct($str) {
      echo $str;
    }

  }

  $instance = new Product('商品');

  $instance->getProduct();
  echo '<br>';

  $instance->addProduct('追加商品');
  echo '<br>';

  $instance->getProduct();
  echo '<br>';

  Product::getStaticProduct('静的');

  


?>
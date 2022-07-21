<?php

  // インターフェイス
  interface ProductInterface {
    // public function echoProduct() {
    //   echo '親クラスです。';
    // }

     public function getProduct();
  }
  interface NewsInterface {
    // public function echoProduct() {
    //   echo '親クラスです。';
    // }

     public function getNewsProduct();
  }


  class BaseProduct extends AbstractProduct {
    public function echoProduct() {
      echo '親クラスです。';
    }

    public function getProduct() {
      echo '親クラスです。';
    }
  }

  class Product implements ProductInterface, NewsInterface {

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

    public function getNewsProduct() {
      echo 'ニュース';
    }

  }

  $instance = new Product('商品');

  $instance->getProduct();
  echo '<br>';

  $instance->echoProduct();
  echo '<br>';

  $instance->addProduct('追加商品');
  echo '<br>';

  $instance->getProduct();
  echo '<br>';

  Product::getStaticProduct('静的');

  


?>
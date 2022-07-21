<?php

  trait ProductTrait {
    public function getProduct() {
      echo '商品';
    }
  }
  trait NewsTrait {
    public function getNews() {
      echo 'ニュース';
    }
  }

  class TraitProduct {
    use ProductTrait;
    use NewsTrait;


    public function getInformation() {
      echo 'クラスです。';
    }
    
  }
  
  $product = new TraitProduct();

  $product->getProduct();
  $product->getNews();
  $product->getInformation();

?>
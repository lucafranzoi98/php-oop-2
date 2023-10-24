<?php
require_once __DIR__ . '/Product.php';

Class Food extends Product{

   public function __construct($id, $name, $price, Category $category, $image, $description, $expirationDate) {
      parent::__construct($id, $name, $price, $category, $image, $description);

      $this->expirationDate = $expirationDate;
   }

   public function getClassName(){
      return get_class();
   }
}
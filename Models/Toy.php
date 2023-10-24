<?php
require_once __DIR__ . '/Product.php';

Class Toy extends Product{
   public function __construct($id, $name, $price, Category $category, $image, $description, $material) {
      parent::__construct($id, $name, $price, $category, $image, $description);

      $this->material = $material;
   }

   public function getClassName(){
      return get_class();
   }
}
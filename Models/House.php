<?php
require_once __DIR__ . '/Product.php';

Class House extends Product{
   public function __construct($id, $name, $price, Category $category, $image, $description, $style) {
      parent::__construct($id, $name, $price, $category, $image, $description);

      $this->style = $style;
   }

   public function getClassName(){
      return get_class();
   }
}
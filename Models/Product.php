<?php
require_once __DIR__ . '/../Traits/Namable.php';

class Product
{
   use Namable;

   public function __construct(protected int $id, protected string $name, protected /*float*/ $price, Category $category, protected string $image, protected string $description)
   {
      $this->id = $id;
      $this->name = $name;
      $this->price = $price;
      $this->category = $category;
      $this->image = $image;
      $this->description = $description;
   }

   public function getPrice(): string
   {
      return $this->price;
   }

   public function getClassName()
   {
      return get_class();
   }

   public function getImagePath(): string
   {
      return $this->image;
   }

   public function getDescription(): string
   {
      return $this->description;
   }

   public function checkPrice()
   {
      if (!is_float($this->price)) {
      throw new Exception("Wrong data type", 1);
      }
      return $this->price;
   }
}


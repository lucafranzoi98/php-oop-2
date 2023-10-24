<?php

class Product
{
   public function __construct(protected int $id, protected string $name, protected float $price, Category $category, protected string $image, protected string $description)
   {
      $this->id = $id;
      $this->name = $name;
      $this->price = $price;
      $this->category = $category;
      $this->image = $image;
      $this->description = $description;
   }
   public function getName(): string
   {
      return $this->name;
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
}

<?php
require_once __DIR__ . '/../Traits/Namable.php';

class Category
{
   use Namable;

   public function __construct(protected string $name, protected string $icon)
   {
      $this->name = $name;
      $this->icon = $icon;
   }

   function getIcon(): string
   {
      return $this->icon;
   }

}

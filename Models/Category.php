<?php

class Category
{
   public function __construct(protected string $name, protected string $icon)
   {
      $this->name = $name;
      $this->icon = $icon;
   }

   function getIcon(): string
   {
      return $this->icon;
   }

   function getName(): string
   {
      return $this->name;
   }
}

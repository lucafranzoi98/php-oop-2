<!-- Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
L'e-commerce vende prodotti per animali.
I prodotti sono categorizzati, le categorie sono Cani o Gatti.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia). -->

<?php
class Item{
   protected $name;
   protected $details;
   protected $img;
   protected $price;
   protected $type;
   protected $category;

   public function __construct(string $name, string $details, string $img, float $price, string $type, string $category)
   {
      $this->name = $name;
      $this->details = $details;
      $this->img = $img;
      $this->price = $price;
      $this->type = $type;
      $this->category = $category;
   }

   // Getters
   function getName(){
      return $this->name;
   }
   function getDetails(){
      return $this->details;
   }
   function getImg(){
      return $this->img;
   }
   function getPrice(){
      return $this->price;
   }
   function getType(){
      return $this->type;
   }
   function getCategory(){
      return $this->category;
   }
}
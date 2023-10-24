<?php

$cats = new Category('cats', './img/cat.png');
$dogs = new Category('dogs', './img/dog.png');

$categories = [
  $cats,
  $dogs
];

$ball = new Toy(1, 'Ball Name', 12.99, $categories[1], './img/ball.jpg', 'Ball Description', 'soft');


$biscuits = new Food(2, 'Biscuit Name', 10.50, $categories[1], './img/biscuits.jpg', 'Biscuits Description', '2023-12-25');

$litter = new House(3, 'Litter Name', 2.99, $categories[0], './img/litter.jpg', 'Litter Description', 'modern');



$products = [
  $ball,
  $biscuits,
  $litter
];
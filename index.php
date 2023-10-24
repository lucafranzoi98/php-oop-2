<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require __DIR__ . '/Models/Category.php';
require __DIR__ . '/Models/Product.php';
require __DIR__ . '/Models/Food.php';
require __DIR__ . '/Models/Toy.php';
require __DIR__ . '/Models/House.php';
require __DIR__ . '/database/db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   <title>OOP 2</title>
</head>
<body class="bg-dark text-white">
   <h1 class="text-center my-3">Pet Store</h1>

   <div class="container mb-5">
      <div class="row row-cols-4 gy-3">
         <?php foreach ($products as $product) : ?>
         
         <div class="col">
            <div class="card h-100">
               <div style="height: 15rem" class="d-flex justify-content-center align-items-center">
                  <img src="<?= $product->getImagePath() ?>" class="card-img-top w-50">
               </div>               
               <div class="card-body">
                  <img src="<?= $product->category->getIcon() ?>" style="width: 1rem">
                  <h5 class="card-title"><?= $product->getName() ?></h5>
                   <h6 class="card-subtitle mb-2 text-muted "><?= $product->getPrice() ?> $</h6>
                  <p class="card-text"><?= $product->getDescription() ?></p>
               </div>
            </div>
         </div>

         <?php endforeach ?>
      </div>
   </div>
</body>
</html>
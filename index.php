<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

define('ROOT', __DIR__);
define('DS', DIRECTORY_SEPARATOR);
require_once ROOT . DS . 'classes' . DS . 'item.php';
require_once ROOT . DS . 'models' . DS . 'items.php';
require_once ROOT . DS . 'db.php';

array_push($items, $biscuits, $ball, $litter, $dispenser, $rope, $bowl, $pillow, $scratcher)
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
         <?php foreach ($items as $item) : ?>
         
         <div class="col">
            <div class="card h-100">
               <div style="height: 15rem" class="d-flex justify-content-center align-items-center">
                  <img src="./img/<?= $item->getImg() ?>" class="card-img-top w-50">
               </div>               
               <div class="card-body">
                  <img src="./img/<?= $item->getCategory() ?>.png" style="width: 1rem">
                  <h5 class="card-title"><?= $item->getName() ?></h5>
                   <h6 class="card-subtitle mb-2 text-muted "><?= $item->getPrice() ?> $</h6>
                  <p class="card-text"><?= $item->getDetails() ?></p>
                  <h6 class="card-subtitle mb-2 text-muted "><?= $item->getType() ?></h6>
               </div>
            </div>
         </div>

         <?php endforeach ?>
      </div>
   </div>
</body>
</html>
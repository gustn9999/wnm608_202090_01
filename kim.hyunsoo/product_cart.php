<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

$cart = MYSQLIQuery("SELECT * FROM products WHERE id in (5,9,13)");




?><!DOCTYPE html>
<html lang="en">
<head>
   <title>Product Cart</title>

   <?php include "parts/meta.php" ?>
</head>
<body>
   
   <?php include "parts/navbar.php" ?>


   <div class="container">
      <div class="card soft">
         <h2>Product Cart</h2>

         <?

         echo array_reduce($cart,'makeCartList');

         ?>

         <div><a href="product_checkout.php">Checkout</a></div>
      </div>
   </div>

</body>
</html>
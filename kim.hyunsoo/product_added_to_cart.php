<?php

include_once "lib/php/functions.php";
$product = MYSQLIQuery("SELECT * FROM `products` WHERE `id` = ".$_GET['id'])[0];

$cart_product = cartItemById($_GET['id']);

?><!DOCTYPE html>
<html lang="en">
<head>
   <title>Added Product To Cart</title>

   <?php include "parts/meta.php" ?>
</head>
<body>

   <?php include "parts/navbar.php" ?>

   <div class="container">
      <div class="card soft">
         <img src="images/cart.png" style="width:100%;">
         <h2>Added <?= $product->name ?> To Cart</h2>

         <p>There are now <?= $cart_product->amount ?> of <?= $product->name ?> in your cart.</p>

         <div class="display-flex">
            <div class="flex-none">
               <a href="product_list.php" class="form-button">Back to shopping</a>
            </div>
            <div class="flex-stretch"></div>
            <div class="flex-none">
               <a href="product_cart.php" class="form-button">Check Cart</a>
            </div>
         </div>
         
      </div>
   </div>

</body>
<footer>
   <?php include "parts/footer.php"; ?>
</footer>
</html>
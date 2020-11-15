<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";





?><!DOCTYPE html>
<html lang="en">
<head>
   <title>Product List</title>

   <?php include "parts/meta.php" ?>
</head>
<body>
   
   <?php include "parts/navbar.php" ?>

   <div class="container">
         <h2>Product List</h2>

         <div class="grid gap">
           
            <?php

            echo array_reduce(
               MYSQLIQuery("
                  SELECT *
                  FROM products
                  ORDER BY date_create DESC
                  LIMIT 12
               "),
               'makeProductList'
            );

            ?>
         </div>
   </div>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
   <title>Product Item</title>

   <?php include "parts/meta.php" ?>
</head>
<body>
   
   <?php include "parts/navbar.php" ?>


   <div class="container">
      <div class="card soft">
         <h2>Product Item</h2>

         <div>This is the product #<?= $_GET['id'] ?></div>
         <div><a href="added_to_cart.php">Add To Cart</a></div>
      </div>
   </div>

</body>
</html>
<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

$product = MYSQLIQuery("SELECT * FROM products WHERE id = {$_GET['id']}")[0];

$thumbs = explode(",",$product->image_other);

$thumbs_elements = array_reduce($thumbs,function($r,$o){
   return $r."<img src='/images/store/$o'>";
});

?><!DOCTYPE html>
<html lang="en">
<head>
   <title>Store: <?= $product->name;?></title>

   <?php include "parts/meta.php" ?>
</head>
<body>
   
   <?php include "parts/navbar.php" ?>


   <div class="container cart-box">
      <div class="grid gap">
         <div class="col-xs-12 col-md-7">
            <div class="card soft">
               <div class="image-main">
                  <img src="/images/store/<?= $product->image_thumb ?>" alt="">
               </div>
            
            </div>
         </div>
         <div class="col-xs-12 col-md-5">
            <form class="card soft flat" method="post" action="product_actions.php?action=add-to-cart">
               <input type="hidden" name="product-id" value="<?= $product->id ?>">
               <div class="select-content">
               <div class="card-section">
                  <h2><?= $product->name;?></h2>
                  <div>&dollar;<?= $product->price ?></div>
               </div>
               <div class="card-section">
                  <div class="form-control">
                     
                     <label for="product-amount" class="form-label">Amount</label>
                     <div class="form-select">
                        <select name="product-amount" id="product-amount">
                           <!-- option[value=$]*10>{$} -->
                           <option value="1">375ml</option>
                           <option value="2">750ml</option>
                           <option value="3">1500ml</option>
                           <option value="4">3000ml</option>
                           <option value="5">6000ml</option>
                        
                        </select>
                     </div>
                  </div>
                   <div class="form-control">
                     
                     <label for="product-amount" class="form-label">Amount</label>
                     <div class="form-select">
                        <select name="product-amount" id="product-amount">
                           <!-- option[value=$]*10>{$} -->
                           <option value="1">1</option>
                           <option value="2">2</option>
                           <option value="3">3</option>
                           <option value="4">4</option>
                           <option value="5">5</option>
                        
                        </select>
                     </div>
                  </div>
        
                  <div class="form-control">
                     <input type="submit" class="form-button" value="Add To Cart">
                  </div>
               </div>
               </div>
            </form>
         </div>
      </div>
      <div class="card soft medium">
         <p><?= $product->description ?></p>
      </div>
         <h2>Related Products</h2>

         <div class="grid gap">
           
            <?php

            echo array_reduce(
               MYSQLIQuery("
                  SELECT *
                  FROM products
                  WHERE id in (4,6,8)
               "),
               'makeProductList'
            );

            ?>
         </div>
   </div>

</body>
<footer>
   <?php include "parts/footer.php"; ?>
</footer>
</html>
<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";





?><!DOCTYPE html>
<html lang="en">
<head>
   <title>Store</title>

   <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

   <?php include "parts/meta.php" ?>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script crossorigin="anonymous" src="https://kit.fontawesome.com/70a642cd7c.js"></script>
</head>
<body>
   
   <?php include "parts/navbar.php" ?>
<!--social-------->
   <div class="social">
   <a href="#"><i class="fab fa-facebook-f"></i></a>
   <a href="#"><i class="fab fa-twitter"></i></a>
   <a href="#"><i class="fab fa-instagram"></i></a>
   <a href="#"><i class="fab fa-youtube"></i></a>
   
   </div>
   <!--side-menu------------->
      <div class="side-box">
   <!--search------------->
      <div class="search">
      <!--icon----------->
      <i class="fas fa-search"></i>
      <input placeholder="Search" type="text" />
      </div>
   
      </div>

   <div class="view-window" style="background-image:url(images/store/banner.png)">
      
      </div>
      

   </div>
   <div class="container">
      <div class="card soft" >
         
         <div class="grid gap">
            <img class="col-xs-12 col-md-6" src="images/welcome.png" style="width:100%;">
            <div class="col-xs-12 col-md-6 middle-text">
               <h3 style="font-size: 1.5rem;">Fresh Ingredients Everyday!</h3>
               <p>Sunny Cocktails make and deliver cocktails using only fresh refrigerated fruits grown directly in California.</p>
            </div>
         </div>
      </div>
   </div>
   <div class="container">
      <div class="card soft">
         <h2 class="popular_item_h2" style="text-align: center;">Popular Items</h2>
         <!--import popular items-->
         <div class="item-wrap">
               <div class="form-control">
                  <div class="product-list grid gap">
                     <?php
                        $pageItemCount = 4;
                        echo array_reduce(
                           MYSQLIQuery("SELECT * FROM products WHERE id IN (3,6,8,10)"),
                           "makeProductList"
                        );
                     ?>
                  </div>
                  </div>
               </div>
            </div>
         </div>
         <?php 
         //$pageItemCount = 4;
         //include "../parts/popularItem.php";
         ?>
      </div>
   </div>
   <!--subscribe------------------------->
   <section class="subcribe-container">
      <!--heading-->
      <h3>Subcribe For New Drink Notification</h3>
      <!--Input-------->
      <div class="subcribe-input">
         <input placeholder="Eample@gmail.com" type="email" />
         <a class="m-btn-purple" href="#">Send</a>
      </div>
   </section>

</body>
<footer>
   <?php include "parts/footer.php"; ?>
</footer>
</html>
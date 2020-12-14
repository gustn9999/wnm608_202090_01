<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

?><!DOCTYPE html>
<html lang="en">
<head>
   <title>Product Checkout</title>

   <?php include "parts/meta.php" ?>
</head>
<body>


 <?php include "parts/navbar.php"; ?>

   <div class="container">
      <div class="card card-checkout-page">
         <h2 class='checkout-content-title'>CHECK OUT</h2>

         <div class="checkout-content-block clearfix">

            <div class="checkout-page-left">
               <div class="checkout-section checkout-contact-section">
                  <div class="checkout-section-title checkout-contact-section-title">CONTACT INFORMATION</div>
                  <div class="checkout-contact-section-input">
                     <input class="checkout-input" type="text" placeholder='Email address'/>
                  </div>
               </div>
               <div class="checkout-section checkout-shipping-section">
                  <div class="checkout-section-title checkout-shipping-title">SHIPPING ADDRESS</div>
                  <div class="checkout-shipping-section-input">
                     <input class="checkout-input" type="text" placeholder='First name'/>
                     <input class="checkout-input" type="text" placeholder='Last name'/>
                     <input class="checkout-input" type="text" placeholder='Address'/>
                     <div class="checkout-input-group clearfix">
                        <input class="checkout-input checkout-input-half checkout-input-half-left" type="text" placeholder='City'>
                        <input class="checkout-input checkout-input-half checkout-input-half-right" type="text" placeholder='Country'>
                     </div>
                     <div class="checkout-input-group clearfix">
                        <input class="checkout-input checkout-input-half checkout-input-half-left" type="text" placeholder='State'>
                        <input class="checkout-input checkout-input-half checkout-input-half-right" type="number" placeholder='Zip code'>
                     </div>
                  </div>
               </div>
            </div>

            <div class="checkout-page-right">
               <div class="checkout-section checkout-payment-section">
                  <div class="checkout-section-title checkout-payment-title">PAYMENT</div>
                  <div class="checkout-payment-section-input">
                     <input class="checkout-input" type="number" placeholder='Card number'/>
                     <input class="checkout-input" type="text" placeholder='Exp date'/>
                     <input class="checkout-input" type="number" placeholder='Security code'/>
                  </div>
               </div>
            </div>

         </div>

         <div class="checkout-page-btn-group clearfix">
            <div class="btn m-btn-pink"><a href="product_cart.php">   
            &#5176; Return to card</a> </div>
            <div class="btn"><a href="product_confirmation.php">Submit order</a></div>
         </div>
      </div>
   </div>

</body>
<footer>
   <?php include "parts/footer.php"; ?>
</footer>
</html>
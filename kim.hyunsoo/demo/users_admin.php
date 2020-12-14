<?php

include "php/function.php";
$users = file_get_json("users.json");

function showUserPage($user) {
   $classes = implode(", ", $user->classes);

   // update json base on user input
   if(isset($_POST['uname']) && isset($_POST['user_type']) && isset($_POST['user_email']) && isset($_POST['user_classes'])){
      $userName = $_POST['uname'];
      $userType = $_POST['user_type'];
      $userEmail = $_POST['user_email'];
      $userClass = $_POST['user_classes'];
      
      $user->name = $userName;
      $user->type = $userType;
      $user->email = $userEmail;
      $classes = $userClass;
   }

   echo 
   <<<HTML
   <nav class="nav crumbs">
      <ul>
         <li><a href="{$_SERVER['PHP_SELF']}">Back</a></li>
      </ul>
   </nav>
   <div class="user_info_container">
      <h2>$user->name</h2>
       <div>
            <strong>Type</strong>
         <span>$user->type</span>
       </div>
       <div>
          <strong>Email</strong>
          <span>$user->email</span>
       </div>
       <div>
          <strong>Classes</strong>
          <span>$classes</span>
       </div>
   </div>
   HTML;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
   <title>User Administrator</title>
   <?php include "parts/meta.php"; ?>
</head>
<body>
   <header class="navbar">
      <div class="container display-flex">
         <div class="flex-none">
            <h1>Users Admin</h1>
         </div>
         <div class="flex-stretch"></div>
         <!-- nav.nav.flex-none>ul>li>a[href=#]>{List} -->
         <nav class="nav flex-none">
            <ul>
               <li><a href="<?= $_SERVER['PHP_SELF'] ?>">List</a></li>
            </ul>
         </nav>
      </div>
   </header>

   <div class="container">
      <div class="card soft">
         <?php
         if(isset($_GET['id'])){
            showUserPage($users[$_GET['id']]);
            //$userId = $users[$_GET['id']];

            //echo $_SERVER['REQUEST_URI'];

            echo 
            '
         <form class="update_user_form" action="'.$_SERVER['REQUEST_URI'].'" method="post">
            <label>Update the user info here</label>
            <input type="text" name="uname" placeholder="Update user name here" required>
            <select  name="user_type" >
              <option selected>Choose a User Type</option>
              <option value="teacher">Teacher</option>
              <option value="singer">Singer</option>
              <option value="actor">Actor</option>
              <option value="who knows">Who Knows</option>
              <option value="chef">Chef</option>
            </select>
            <br>
            <input type="email" name="user_email" required placeholder="Your Email">
            <br>
            <input type="text" name="user_classes" required placeholder="Your Class Number">
            <br>
            <button type="submit">Update user</button>
         </form>
            ';
            
         } else{
        ?>

         <h2>User List</h2>

         <ul>
            <?php

            for($i=0; $i<count($users); $i++) {
               echo 
               "
               <li>
               <a href='{$_SERVER['PHP_SELF']}?id=$i'>{$users[$i]->name}</a>
               </li>
               ";
            }
            ?>
         </ul>

      <?php 
      }
      ?>
      </div>
      </div>
   <!-- <script>
      const updateBtn = document.querySelector(".update_user_btn");
      const updateUserForm = document.querySelector(".update_user_form");
      updateBtn.addEventListener("click", ()=>{
         updateUserForm.style.display = "block"
      })
   </script> -->
</body>
</html>
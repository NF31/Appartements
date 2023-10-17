<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>
   <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">
   <!-- custom css file link  -->
   <link rel="stylesheet" href="./appart.css">
   <link rel="stylesheet" href="./admin.css">

</head>
<body>
   
<div class="container">
<label for="" id="dark-change"></label>
   <div class="content">

   <i class="ri-user-settings-line"  id="trator"></i>
  <!-- <img src="./img/administrator.jpg" alt="" > -->
      <h3>hi, <span>admin</span></h3>
      <h1>welcome <span><?php echo $_SESSION['admin_name'] ?></span></h1>
      <p>this is an admin page</p>
      <a href="login_form.php" class="btn">login</a>

      <a href="logout.php" class="btn">logout</a>
   </div>

</div>




<script src="./appart.js"></script>
</body>
</html>
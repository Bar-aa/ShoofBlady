
<?php include 'basics.php';?>
<?php

$conn = mysqli_connect('localhost','arbapal','areejbaraa2002','palestine');

//session_start();
$user_id = $_SESSION['user_id'];

if(!isset($_SESSION['user_name'])){
   header('location:login.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile </title>
    <link rel="shortcut icon" href="favicon_io/favicon.ico" type="image/x-icon" >
    <!-- arabic google font link  -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Gulzar&family=Work+Sans:ital,wght@0,200;0,300;0,400;0,500;0,800;1,600&display=swap');
    </style>
    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style1.css">
</head>
<body>
<?php
setnav();

?>
<div class="container">
   <div class="content">
      <h3>hi, <span>user</span></h3>
      <h1>welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>
      <p>this is an user page</p>
      <a href="login.php" class="btn">login</a>
      <a href="register_form.php" class="btn">register</a>
      <a href="logout.php" class="btn">logout</a>
      <a href="user.php" class="btn">packeges</a>
   </div>
</div>
<?php
setfooter();
?>
</body>
</html>
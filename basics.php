<?php
session_start();
?>
<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
<style>
    @import url('https://fonts.googleapis.com/css2?family=Gulzar&family=Work+Sans:ital,wght@0,200;0,300;0,400;0,500;0,800;1,600&display=swap');
</style>
<style>
    #test{
        font-family: "Times New Roman";
        font-size: 20px;
        text-decoration: none;
    }
    #img_test{
        float: left;
        height: 50px;
        width: 20px;
    }
    #id_span{
        font-size: 15px;
        font-family: "Gulzar","sref";
        float: left;
        padding-left: 27px;
        color: #8c51a5;
    }
    #a1 ,#a2, #a3, #a4{
        text-decoration: none;
    }
    button#a4 {
        background-color: white;
    }
</style>
<?php
function setnav(){?>
    <section class="header">
    <a href="FUN.html" id="test" class="logo" > <img id="img_test" src="images/logo.jpg" alt="logo" >  Shoof Blady
    <br><span id="id_span" >شوف بلادي  </span> </a>
   <nav class="navbar">
      <a href="home.php" id ="a1" >Home</a>
       <a href="user.php" id ="a2">Tour package</a>
       <a href="gallerypalestine.php" id ="a3">Palestine Gallery</a>
       <a href="aboutus.php" id ="a4">Who Are We</a>
       <?php
           if(!isset($_SESSION['user_id'])){?>
               <a href="login.php" id ="a4">Log in</a>

           <?php }
           else{?>
               <button id ="a4"><span><a>Profile</a></span></button>
               <div class="pop-up">
                   <div class="content">
                       <div class="container">
                           <div class="dots">
                               <div class="dot"></div>
                               <div class="dot"></div>
                               <div class="dot"></div>
                           </div>

                           <span class="close">close</span>

                           <div class="title">
                               <h1>Profile Setting</h1>
                           </div>

                           <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/256492/cXsiNryL.png" alt="Car">

                           <div class="subscribe">

                               <h1>Click on the  <span>appropriate option</span>.</h1>

                               <div class="form1">
                                   <button class="button1" style="background-color: white;"><a href="ManegeUserPackeges.php">packeges</a></button>
                                   <button class="button1" style="background-color: white;"><a href="ManegeUserAccount.php">Acount</a></button>
                                   <button class="button1" style="background-color: white;"><a href="logout.php">Log out</a></button>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           <?php }
       ?>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>
</section>

<?php } ?>
<?php function setfooter(){
    echo '
    <section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> Home</a>
         <a href="aboutus.php"> <i class="fas fa-angle-right"></i> Log in</a>
         <a href="tourPackage.php"> <i class="fas fa-angle-right"></i> Gallery</a>
         <a href="#"> <i class="fas fa-angle-right"></i> About us</a>
      </div>

      <div class="box">
         <h3>extra links</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> Help</a>
         <a href="#"> <i class="fas fa-angle-right"></i> palestine map</a>
         <a href="#"> <i class="fas fa-angle-right"></i> about palestine</a>
         <a href="#"> <i class="fas fa-angle-right"></i> visit us</a>
      </div>

      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +970599754422</a>
         <a href="#"> <i class="fas fa-phone"></i> +970577861142</a>
         <a href="#"> <i class="fas fa-envelope"></i> shoofblady@gmail.com</a>
         <a href="#"> <i class="fas fa-map"></i> map</a>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>

   </div>

   <div class="credit"> created by <span>Baraa AND Areej</span> | all rights reserved! </div>

</section>
    ';
} ?>




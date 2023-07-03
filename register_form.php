<?php

$conn = mysqli_connect('localhost','arbapal','areejbaraa2002','palestine');

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $email =$_POST['email'];
    $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
    $cpass = mysqli_real_escape_string($conn, md5($_POST['cpassword']));
    //$pass = $_POST['password'];
    //$cpass =$_POST['cpassword'];
    $phone =$_POST['phone'];
    $image =$_POST['image'];
    $id=$_POST['id'];

    $select = " SELECT * FROM member WHERE Email = '$email' && password = '$pass' ";
    $result = mysqli_query($conn, $select);
    if(mysqli_num_rows($result) > 0){

        $error[] = 'user already exist!';

    }else{

        if($pass != $cpass){
            $error[] = 'password not matched!';
        }else{
            $insert = "INSERT INTO member (name, password, Email, Phone, Photo, idmem, user_type) VALUES ( '$name', '$pass', '$email', '$phone', '$image', '$id', 'user');";
            mysqli_query($conn, $insert);
            header('location:login.php');
        }
    }

};
?>
<?php include 'basics.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign up</title>
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

<!-- header section starts  -->

<?php
setnav();
?>
<!-- header section ends -->
<!-- log in strat-->
<div class="base">
    <div class="container">
        <article class="card">
            <div class="card__publication">
                <img src="images/login.jpg" alt="" >
                <div>
						<span class="card__author">
							<i class="ri-user-line card__icon"></i>
						</span>
                    <span class="card__date">
							<i class="ri-calendar-line card__icon"></i>
						</span>
                </div>
            </div>
            <div class="card__info">
                <div class="forms">
                    <div class="form login ">
                        <span class="title">Registration</span>
                        <form action="" method="post">
                            <?php
                            if(isset($error)){
                                foreach($error as $error){
                                    echo '<span class="error-msg" style="color: red">'.$error.'</span>';
                                };
                            };
                            ?>
                            <div class="input-field">
                                <input type="text" placeholder="Username"  name="name" required="required">
                                <i class="fa fa-user"></i>
                            </div>
                            <div class="input-field">
                                <input type="email" placeholder="Email" name="email" required="required" />
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="input-field">
                                <input type="" placeholder="id" name="id" required="required" />
                                <i class="fa fa-user"></i>
                            </div>
                            <div class="input-field">
                                <input type="password" placeholder="Password" name="password" required="required" />
                                <i class="fa fa-key" ></i>
                            </div>
                            <div class="input-field">
                                <input type="password" name="cpassword" required placeholder="confirm your password">
                                <i class="fa fa-times" ></i>
                            </div>

                            <div class="input-field">
                                <input type="tel" placeholder="phone"  name="phone"  required="required"/>
                                <i class="fa fa-phone" aria-hidden="true"></i>
                            </div>

                            <div class="login-signup">
                                <span class="text" id="memb">Already a member?
                                    <a href="login.php" class="text login-link" >Login Now</a>
                                </span>
                            </div>
                            <div class="input-field button">
                                <input type="submit" name="submit" class="btn" value="Sign up" />
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </article>
    </div>
</div>

<!-- log in strat-->
<!-- footer section starts  -->
<?php
setfooter();
?>
<!-- footer section ends -->
<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<!-- custom js file link  -->
<script src="js/script.js"></script>
</body>
</html>



<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    /* ======================== */
    .form .login-signup {
        margin-top: 30px;
        text-align: center;
    }
    /* ======================== */
    .base {
        font-family: 'Poppins', sans-serif;
        font-size: 1.6rem;
        color: #fff;
        display: grid;
        place-items: center;
        width: 100%;
        background: linear-gradient(
            to right bottom,
            rgba(48, 110, 255, 0.8),
            rgba(204, 0, 255, 0.8)
    );
    }
    .container{
        margin-inline: auto;
        position: relative;
        max-width: 100%;
        background: #eeeeee;
        border-radius: 10px;
        box-shadow: 0 5px 10px #8c51a5;
        overflow: hidden;
        margin: 20px;
        padding: 10px;
    }
    .card {
        background-color: #fff;
        color: #333;
        box-shadow: 2px 0.8rem 1rem rgba(0, 0, 0, 0.025);
    }
    .card__publication {
        position: relative;
        height: 20rem;
        overflow: hidden;
    }
    .card__publication img {
        position: absolute;
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s;
    }
    .card:hover .card__publication img {
        transform: scale(1.5);
    }
    .card__publication > div {
        background: linear-gradient(
                to right bottom,
                rgba(48, 110, 255, 0.2),
                rgba(204, 0, 255, 0.2)
        );
        font-size: 1.4rem;
        font-weight: bold;
        color: #fff;
        position: absolute;
        inset: 0;
        padding: 1rem;
    }
    .card__icon {
        margin-right: 1rem;
    }
    .card__publication span {
        display: block;
    }
    .card__author {
        margin-bottom: 0.5rem;
    }
    .card__info {
        position: relative;
        padding: 2rem 3rem;
    }

    .card__cta span {
        display: inherit;
        transition: transform 0.5s;
    }
    .card__cta:hover span {
        transform: translateX(0.5rem);
    }
    @media screen and (min-width: 37.5em) {
        .card {
            display: grid;
            grid-auto-flow: column;
            max-width: 75rem;
        }
        .card__publication {
            width: 25rem;
            height: initial;
        }
    }
    /* ======================== */
    .container .forms{
        display: flex;
        align-items: center;
        height: auto;
        width: auto;
        transition: height 0.2s ease;
    }
    .container.active .forms{
        height: 600px;
    }
    .container .form .title{
        position: relative;
        font-size: 27px;
        font-weight: 600;
    }

    .form .title::before{
        content: '';
        position: absolute;
        left: 0;
        bottom: 0;
        height: 3px;
        width: 30px;
        background-color: #8c51a5 ;
        border-radius: 25px;
    }

    .form .input-field{
        position: relative;
        height: 50px;
        width: 100%;
        margin-top: 10px;
    }
    .input-field input{
        position: absolute;
        height: 100%;
        width: 100%;
        padding: 0 35px;
        border: none;
        outline: none;
        font-size: 16px;
        border-bottom: 2px solid #ccc;
        border-top: 2px solid transparent;
        transition: all 0.2s ease;
    }

    .input-field input:is(:focus, :valid){
        border-bottom-color: #8c51a5 ;
    }

    .input-field i{
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        color: #999;
        font-size: 23px;
        transition: all 0.2s ease;
    }

    .input-field input:is(:focus, :valid) ~ i{
        color:#8c51a5  ;
    }
    .form .checkbox-text{
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-top: 20px;
    }

    .checkbox-text .checkbox-content{
        display: flex;
        align-items: center;
    }

    .checkbox-content input{
        margin-right: 10px;
        accent-color:#8c51a5 ;
    }

    .input-field input{
        position: absolute;
        height: 100%;
        width: 100%;
        padding: 0 35px;
        border: none;
        outline: none;
        font-size: 16px;
        border-bottom: 2px solid #ccc;
        border-top: 2px solid transparent;
        transition: all 0.2s ease;
    }

    .input-field input:is(:focus, :valid){
        border-bottom-color: #8c51a5 ;
    }

    .input-field i{
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        color: #999;
        font-size: 23px;
        transition: all 0.2s ease;
    }

    .input-field input:is(:focus, :valid) ~ i{
        color:#8c51a5  ;
    }
    .form .checkbox-text{
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-top: 20px;
    }

    .checkbox-text .checkbox-content{
        display: flex;
        align-items: center;
    }

    .checkbox-content input{
        margin-right: 10px;
        accent-color:#8c51a5 ;
    }
    .form .button{
        margin-top: 15px;
    }
    .form .button input{
        border: none;
        color: #fff;
        font-size: 17px;
        font-weight: 500;
        letter-spacing: 1px;
        border-radius: 6px;
        background-color: #8c51a5 ;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    .button input:hover{
        background-color:#8c51a5 ;
    }

    /* ======================== */
</style>

<style>
    /* COLORS
 ========================================== */
    /* MIXINS
     ========================================== */
    /* KEYFRAMES
     ========================================== */
    @-webkit-keyframes float {
        0% {
            transform: translatey(0px);
            transform: translatex(0px);
        }
        50% {
            transform: translatey(-30px);
            transform: translatex(20px);
        }
        100% {
            transform: translatey(0px);
            transform: translatex(0px);
        }
    }
    @-moz-keyframes float {
        0% {
            transform: translatey(0px);
            transform: translatex(0px);
        }
        50% {
            transform: translatey(-30px);
            transform: translatex(20px);
        }
        100% {
            transform: translatey(0px);
            transform: translatex(0px);
        }
    }
    @-o-keyframes float {
        0% {
            transform: translatey(0px);
            transform: translatex(0px);
        }
        50% {
            transform: translatey(-30px);
            transform: translatex(20px);
        }
        100% {
            transform: translatey(0px);
            transform: translatex(0px);
        }
    }
    @keyframes float {
        0% {
            transform: translatey(0px);
            transform: translatex(0px);
        }
        50% {
            transform: translatey(-30px);
            transform: translatex(20px);
        }
        100% {
            transform: translatey(0px);
            transform: translatex(0px);
        }
    }
    /* RESET
     ========================================== */
    *:before, *:after {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    /* BUTTON
     ========================================== */


    .form1 .button1:hover {
        cursor: pointer;
        background-color: #8e6ac1;
        color: #ffffff;
    }
    .form1 .button1 span {
        opacity: 1;
    }
    form1 .clicked button {
        visibility: hidden;
        oacity: 0;
    }
    /* POP-UP
     ========================================== */
    .pop-up {
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%) scale(0.9);
        -moz-transform: translate(-50%, -50%) scale(0.9);
        -ms-transform: translate(-50%, -50%) scale(0.9);
        -o-transform: translate(-50%, -50%) scale(0.9);
        transform: translate(-50%, -50%) scale(0.9);
        overflow-y: auto;
        box-shadow: 0px 6px 30px rgba(0, 0, 0, 0.4);
        visibility: hidden;
        opacity: 0;
        -webkit-transition: all 0.3s;
        -moz-transition: all 0.3s;
        -o-transition: all 0.3s;
        transition: all 0.3s;
        z-index: 10;
        background-color: #ffffff;
        width: 100%;
        height: 100%;
    }
    @media (min-width: 768px) {
        .pop-up {
            width: calc(100% - 40px);
            height: auto;
            max-width: 900px;
        }
    }
    .pop-up .content {
        width: 100%;
        max-width: 900px;
        overflow: hidden;
        text-align: center;
        position: relative;
        min-height: 100vh;
    }
    @media (min-width: 768px) {
        .pop-up .content {
            min-height: inherit;
        }
    }
    .pop-up .content .container {
        padding: 100px 20px 140px;
    }
    @media (min-width: 568px) {
        .pop-up .content .container {
            padding: 50px 20px 80px;
        }
    }
    @media (min-width: 768px) {
        .pop-up .content .container {
            padding: 70px 0px 90px;
            max-width: 520px;
            margin: 0 auto;
        }
    }
    .pop-up .content .close {
        position: absolute;
        top: 20px;
        left: 20px;
        font-size: 1.1rem;
        letter-spacing: 0.05rem;
        color: #3e4146;
        -webkit-transition: all 0.4s;
        -moz-transition: all 0.4s;
        -o-transition: all 0.4s;
        transition: all 0.4s;
    }
    .pop-up .content .close:hover {
        cursor: pointer;
        color: #f66867;
    }
    .pop-up .content .dots .dot {
        position: absolute;
        border-radius: 100%;
        z-index: 11;
    }
    .pop-up .content .dots .dot:nth-of-type(1) {
        top: -80px;
        right: -80px;
        width: 160px;
        height: 160px;
        background-color: #689bf6;
        -webkit-animation: float 6s ease-in-out infinite;
        -moz-animation: float 6s ease-in-out infinite;
        -o-animation: float 6s ease-in-out infinite;
        animation: float 6s ease-in-out infinite;
    }
    @media (min-width: 768px) {
        .pop-up .content .dots .dot:nth-of-type(1) {
            top: -190px;
            right: -190px;
            width: 380px;
            height: 380px;
        }
    }
    .pop-up .content .dots .dot:nth-of-type(2) {
        bottom: -120px;
        left: -120px;
        width: 240px;
        height: 240px;
        background-color: #f66867;
        -webkit-animation: float 8s ease-in-out infinite;
        -moz-animation: float 8s ease-in-out infinite;
        -o-animation: float 8s ease-in-out infinite;
        animation: float 8s ease-in-out infinite;
    }
    .pop-up .content .dots .dot:nth-of-type(3) {
        bottom: -50px;
        right: -50px;
        width: 100px;
        height: 100px;
        background-color: #ffd84c;
        -webkit-animation: float 4s ease-in-out infinite;
        -moz-animation: float 4s ease-in-out infinite;
        -o-animation: float 4s ease-in-out infinite;
        animation: float 4s ease-in-out infinite;
    }
    .pop-up .content .title h1 {
        text-align: center;
        color: #f66867;
        text-transform: uppercase;
        font-weight: 900;
        font-size: 2.8rem;
        letter-spacing: 0.05rem;
    }
    .pop-up .content img {
        width: 100%;
        max-width: 220px;
        display: inline-block;
        margin: 30px 0 40px 0;
        opacity: 0;
        -webkit-transform: translateX(60px);
        -moz-transform: translateX(60px);
        -ms-transform: translateX(60px);
        -o-transform: translateX(60px);
        transform: translateX(60px);
        -webkit-transition: 0.2s;
        -moz-transition: 0.2s;
        -o-transition: 0.2s;
        transition: 0.2s;
        -webkit-backface-visibility: hidden;
    }
    @media (min-width: 768px) {
        .pop-up .content img {
            max-width: 300px;
        }
    }
    .pop-up .content .subscribe h1 {
        font-size: 1.5rem;
        color: #3e4146;
        line-height: 130%;
        letter-spacing: 0.07rem;
        margin-bottom: 30px;
    }
    .pop-up .content .subscribe h1 span {
        color: #f66867;
    }
    .pop-up .content .subscribe .form1 {
        overflow: hidden;
    }
    .pop-up .content .subscribe form1 .button1 {
        width: 100%;
        float: left;
        padding: 15px 20px;
        text-align: center;
        font-family: inherit;
        font-size: 1.1rem;
        letter-spacing: 0.05rem;
        outline: 0;
    }

    .pop-up .content .subscribe .form1 .button1 {
        background-color: #8e6ac1;
        color: #ffffff;
        border: 1px solid #8e6ac1;
        -webkit-transition: all 0.4s;
        -moz-transition: all 0.4s;
        -o-transition: all 0.4s;
        transition: all 0.4s;
    }
    @media (min-width: 768px) {
        .pop-up .content .form1 .button1 {
            width: 25%;
        }
    }
    .pop-up .content .subscribe .form1 .button1 {
        cursor: pointer;
        background-color: #7349af;
        border-color: #7349af;
    }
    .pop-up{
        top:365px;
    }
    .pop-up.open {
        visibility: visible;
        opacity: 1;
        -webkit-transform: translate(-50%, -50%) scale(1);
        -moz-transform: translate(-50%, -50%) scale(1);
        -ms-transform: translate(-50%, -50%) scale(1);
        -o-transform: translate(-50%, -50%) scale(1);
        transform: translate(-50%, -50%) scale(1);
    }
    .pop-up.open img {
        opacity: 1;
        -webkit-transition: 1s;
        -moz-transition: 1s;
        -o-transition: 1s;
        transition: 1s;
        -webkit-transition-delay: 0.3s;
        -moz-transition-delay: 0.3s;
        -o-transition-delay: 0.3s;
        transition-delay: 0.3s;
        -webkit-transform: translateX(0px);
        -moz-transform: translateX(0px);
        -ms-transform: translateX(0px);
        -o-transform: translateX(0px);
        transform: translateX(0px);
    }

</style>
<script>
    $('button').click(function(){
        $('.pop-up').addClass('open');
    });

    $('.pop-up .close').click(function(){
        $('.pop-up').removeClass('open');
    });
</script>

<?php include 'basics.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>home</title>
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
    <!-- custom css Profile button  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Roboto+Condensed');
    </style>

</head>
<body>
<!-- header section starts  -->

<?php
setnav();
?>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home">

    <div class="swiper home-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide" style="background:url(images/home-slide-1.png) no-repeat">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>travel arround the world</h3>
                    <a href="login.php" class="btn">join us</a>
                </div>
            </div>
            <div class="swiper-slide slide" style="background:url(images/home-slide-2.png) no-repeat">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>discover the new places</h3>
                    <a href="login.php" class="btn">join us</a>
                </div>
            </div>

            <div class="swiper-slide slide" style="background:url(images/home-slide-3.png) no-repeat">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>make your tour worthwhile</h3>
                    <a href="login.php" class="btn">join us</a>
                </div>
            </div>
            <div class="swiper-slide slide" style="background:url(images/home-slide-4.jpg) no-repeat">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>make your tour worthwhile</h3>
                    <a href="login.php" class="btn">join us</a>
                </div>
            </div>
            <div class="swiper-slide slide" style="background:url(images/home-slide-5.jpg) no-repeat">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>make your tour worthwhile</h3>
                    <a href="login.php" class="btn">join us</a>
                </div>
            </div>
            <div class="swiper-slide slide" style="background:url(images/home-slide-6.jpg) no-repeat">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>make your tour worthwhile</h3>
                    <a href="login.php" class="btn">join us</a>
                </div>
            </div>

        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>

</section>

<!-- home section ends -->

<!-- services section starts  -->

<section class="services">

    <h1 class="heading-title"> our services </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/icon-1.png" alt="">
            <h3>adventure</h3>
        </div>

        <div class="box">
            <img src="images/icon-2.png" alt="">
            <h3>tour guide</h3>
        </div>

        <div class="box">
            <img src="images/icon-3.png" alt="">
            <h3>trekking</h3>
        </div>

        <div class="box">
            <img src="images/icon-4.png" alt="">
            <h3>camp fire</h3>
        </div>

        <div class="box">
            <img src="images/icon-5.png" alt="">
            <h3>off road</h3>
        </div>

        <div class="box">
            <img src="images/icon-6.png" alt="">
            <h3>camping</h3>
        </div>

    </div>

</section>

<!-- services section ends -->



<!-- home packages section starts  -->

<section class="home-packages">

    <h1 class="heading-title"> our packages </h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="images/img1.jpg" alt="">
            </div>
            <div class="content">
                <h3>adventure & tour</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, sint!</p>
                <a href="package.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/img2.jpg" alt="">
            </div>
            <div class="content">
                <h3>adventure & tour</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, sint!</p>
                <a href="package.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/img3.jpg" alt="">
            </div>
            <div class="content">
                <h3>adventure & tour</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, sint!</p>
                <a href="package.php" class="btn">book now</a>
            </div>
        </div>

    </div>

    <div class="load-more"> <a href="package.php" class="btn">load more</a> </div>

</section>

<!-- home packages section ends -->

<!-- home offer section starts  -->

<section class="home-offer">
    <div class="content">
        <h3>upto 50% off</h3>
        <p>Log in now! And get more offers and tracks</p>
        <a href="login.php" class="btn">Log in</a>
    </div>
</section>

<!-- home offer section ends -->


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

<style>

    /*aboutus css*/
    .about{
        background: linear-gradient(rgba(0,0,0,0.30),rgba(0,0,0,0.30)),url(gallery/tree.jpg);
        background-position:center ;
        background-repeat:no-repeat ;
        background-size: cover;
    }
    .wrapper{
        text-align: center;
        color:white;
        line-height: 1.5;
        letter-spacing: 1px;
        min-height: 100vh;
        width: 100%;
    }
    .testimonial{
        padding: 30px 100px;

    }
    article h1{
        font-size: 30px;
        font-weight: 800;
        text-transform: uppercase;
        letter-spacing: 1.5px;
    }
    article h1:hover{
        font-size:31px ;
    }
    article h1:after{
        content:"";
        height: 5px;
        width: 225px;
        background-color: #fff;
        display: block;
        margin: auto;
    }
    article img{
        height: 200px;
        width: 200px;
        border: 2px solid #fff;
        border-radius: 50px;
        margin-top: 60px;
    }
    blockquote{
        font-family: sans-serif;
        font-size: 20px;
        margin-top: 30px;
    }
</style>
<?php include 'basics.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about us</title>
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

<!-- about section starts  -->
<section class="about">
        <div class="wrapper">
            <div class="testimonial">
                <article>
                    <h1>about us</h1>
                    <img src="gallery/p1.jpeg" alt="">
                    <blockquote style="font-size: 20px">
                        We made This site is to get to know Palestine with its cities and villages, to get to know the beauty of
                        including We specialized in religious, cultural and alternative tours to the Holy Land. All of our tour guides are Certified local Palestinians with many years of experience<br>
                        They have a vast and intimate knowledge of the culture, the land, and the language. Palestine remains from its sea to its river forever.
                    </blockquote>
                </article>
            </div>
            <div class="social">
                <a href=""><i class="fab fa-facebook-f" style="font-size:30px;color:white"></i></a>
                <a href=""><i class="fab fa-twitter"style="font-size:30px;color:white"></i></a>
                <a href=""><i class="fab fa-instagram"style="font-size:30px;color:white"></i></a>
            </div>
        </div>

    </section>

<!-- about section ends -->

<!-- reviews section starts  -->

<section class="reviews">

    <h1 class="heading-title"> clients reviews </h1>

    <div class="swiper reviews-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minus facilis laudantium magnam saepe magni ullam possimus laborum voluptas, veniam ipsum officiis quae doloribus minima ut quis. Molestiae qui distinctio possimus?</p>
                <h3>john deo</h3>
                <span>traveler</span>
                <img src="images/pic-1.png" alt="">
            </div>

            <div class="swiper-slide slide">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus repellendus et suscipit optio similique totam aut laborum ullam sequi! In!</p>
                <h3>john deo</h3>
                <span>traveler</span>
                <img src="images/pic-2.png" alt="">
            </div>

            <div class="swiper-slide slide">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus enim deserunt, ab at ea iste odio placeat doloribus eum dolores tempore obcaecati, dolore esse aperiam. Excepturi ad quo distinctio, dignissimos voluptate, dolores, saepe animi eum atque sint esse ab exercitationem!</p>
                <h3>john deo</h3>
                <span>traveler</span>
                <img src="images/pic-3.png" alt="">
            </div>

            <div class="swiper-slide slide">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Possimus recusandae cum quibusdam odio dignissimos nemo?</p>
                <h3>john deo</h3>
                <span>traveler</span>
                <img src="images/pic-4.png" alt="">
            </div>

            <div class="swiper-slide slide">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minus facilis laudantium magnam saepe magni ullam possimus laborum voluptas, veniam ipsum officiis quae doloribus minima ut quis. Molestiae qui distinctio possimus?</p>
                <h3>john deo</h3>
                <span>traveler</span>
                <img src="images/pic-5.png" alt="">
            </div>

            <div class="swiper-slide slide">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minus facilis laudantium magnam saepe magni ullam possimus laborum voluptas, veniam ipsum officiis quae doloribus minima ut quis. Molestiae qui distinctio possimus?</p>
                <h3>john deo</h3>
                <span>traveler</span>
                <img src="images/pic-6.png" alt="">
            </div>

        </div>

    </div>

</section>

<!-- reviews section ends -->









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
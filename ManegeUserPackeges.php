<?php
include 'packegesuser.php'; ?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Slack header / navigation</title>
    <meta name="description" content="Slack exercise">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">
    <!-- Place favicon.ico in the root directory -->

    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" href="oo.css">

    <style>
        #test{
            font-family: "Times New Roman";
            font-size: 20px;
            text-decoration: none;
        }
    </style>
</head>
<body>

<!-- Top nav -->
<header class="global-header" id="top-nav">
    <section class="nav-left">
        <div class="logo">
            <a href="FUN.html" id="test" class="logo" > <img id="img_test" src="favicon_io/favicon-32x32.png" alt="logo" >  Shoof Blady
            </a>
        </div>
        <ul class="nav">
            <li id="menu-1-button">Packeges  <svg class="arrow" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#454545" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9l6 6 6-6"/></svg>


                <aside class="dropdown-menu" id="menu-1">
                    <h2 class="menu-header" style="color: #8e44ad">click one </h2>
                    <ul class="menu-item-list">
                        <!li><a href="#update">Update packages</a></li-->
                        <li><a href="#former">packages</a></li>
                        <!--li><a href="#Upcoming">Upcoming packages</a></li-->
                    </ul>
                </aside>
            </li>
            <li id="menu-2-button">Update profile <svg class="arrow2" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#454545" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9l6 6 6-6"/></svg>

                <aside class="dropdown-menu" id="menu-2">
                    <ul class="menu-item-list">
                        <li><a href="ManegeUserAccount.php#Password">Update Password</a></li>
                        <li><a href="ManegeUserAccount.php#information">Update information</a></li>
                        <li><a href="deleteaccount.php">Delete account</a></li>
                    </ul>
                </aside>
            </li>

        </ul>
    </section>
    <div class="nav-right">
        <p class="workspaces-1" id="my-paragraphout"><a href="logout.php">Log out</a> </p>

        <p class="workspaces" id="my-paragraph"><a href="home.php" style="color: white">Home</a><svg class="arrow5" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9l6 6 6-6"/></svg>
        </p>


        <div class="hamburger-menu" id="menu-trigger">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/2522641/hamburger.svg" alt="Hamburger icon">
        </div>
    </div>
</header>

<!--Main content-->
<section class="placeholder-1">
    <h1 style="margin-left: 20px;font-size: 50px;color: blueviolet">Discover new destinations and create unforgettable memories with us.</h1><br>
    <img src="images/travelcar.png" alt=""></section>
<section class="placeholder">
    <div id="update">
        <!?php ubda(); ?>

    </div>
    <div id="former">
        <?php viw() ?>
    </div>
    <div id="upcoming">

    </div>

</section>

<!--Side menu-->
<aside class="side-menu-position side-menu-design" id="side-menu">
    <header class="side-menu-header">
        <img src="favicon_io/favicon.ico" alt="Shoof Blady logo">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/2522641/x.svg" alt="Close this menu" id="menu-close">
    </header>
    <ul class="side-menu-content">
        <li>Packeges <svg class="arrow4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9l6 6 6-6"/></svg>

        </li>
        <ul class="side-menu-item-list">
            <li><a href="#Update">Update packages</a></li>
            <li><a href="#Former">Former packages</a></li>
            <li><a href="#Upcoming">Upcoming packages</a></li>
        </ul>
        <li class="side-menu-download"><a href="home.php">Go Home</a></li>

        <li class="side-menu-workspace "><a href="logout.php" style="color: white">Log out</a></li>
    </ul>
</aside>






<!--Dropdown Menus, notice how they are asides listed just inside the body - no deeper -->





<script src="oo.js"></script>
</body>
</html>
<script>


    document.querySelector(".hamburger-menu").onclick = open;


    function open() {
        document.querySelector('#side-menu').classList.add("show-menu") ;
    }

    document.querySelector("#menu-close").onclick = close;


    function close() {
        document.querySelector('#side-menu').classList.remove("show-menu") ;
    }




    // side menue dropdown

    document.querySelector(".side-menu-content li").onclick = show;


    function show() {
        document.querySelector('.side-menu-item-list').classList.toggle("show-it");
        document.querySelector('.arrow4').classList.toggle("arrow-rotate2");

    }

    // nav


    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
            document.getElementById("top-nav").style.position = "fixed";
            document.getElementById("top-nav").style.top = "10px";
            document.getElementById("top-nav").style.transition = "top 1s";
            document.getElementById("top-nav").style.borderRadius = "50px";
            document.getElementById("top-nav").style.background = "white";




        } else {
            document.getElementById("top-nav").style.position = "static";
            document.getElementById("top-nav").style.borderRadius = "0%";
            document.getElementById("top-nav").style.top = "0px";
            document.getElementById("top-nav").style.transition = "top 1s";
            document.getElementById("top-nav").style.background = "#f6efe8";

        }
    }




    // ---- Arrows----------

    document.querySelector("#menu-1-button").onmouseover = function functionName() {
        document.querySelector('.arrow').classList.add("arrow-rotate");
    }

    document.querySelector("#menu-2-button").onmouseover = function functionName2() {
        document.querySelector('.arrow2').classList.add("arrow-rotate");
    };


    document.querySelector("#menu-3-button").onmouseover = function functionName3() {
        document.querySelector('.arrow3').classList.add("arrow-rotate");
    };
    ;

    document.querySelector("#menu-1-button").onmouseout = changeAgain;
    document.querySelector("#menu-2-button").onmouseout = changeAgain;
    document.querySelector("#menu-3-button").onmouseout = changeAgain;

    function changeAgain() {
        document.querySelector('.arrow').classList.remove("arrow-rotate");
        document.querySelector('.arrow2').classList.remove("arrow-rotate");
        document.querySelector('.arrow3').classList.remove("arrow-rotate");

    }
    const paragraph = document.getElementById("my-paragraph");

    paragraph.addEventListener("click", () => {
        window.location.href = "home.php";
    });
    const paragraphout = document.getElementById("my-paragraphout");

    paragraphout.addEventListener("click", () => {
        window.location.href = "logout.php";
    });

</script>

<style>

    body {
        font-family: 'Lato', sans-serif; /* Lato font was a close match */
        color: #454545;
        margin: 0;
        background-color: #f6efe8;

    }
    .placeholder-1 img{
        margin: 50px;
    }

    .placeholder-1 {
        display: flex;
        justify-content: flex-end;
    }


    .placeholder {
        background: lightslategray;
        height: auto;
    }

    /**
      * Notice how you have to put a width on fixed elements
      * They aren't by default width: 100% when they are block level elements
      */
    .global-header {
        background-color: #f6efe8;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        height: 40px;
        padding: 15px 25px;
        margin: 0 15px;
        width: calc(100% - 80px);
    }

    /**
     * =============
     * NAV
     * =============
     * Notice how I want the items to be flex-start, so I don't put anything
     * Remember, by default, flex gives us justify-content: flex-start
     */
    .nav-left {
        align-items: center;
        display: flex;
    }

    /**
     * I've got the SVG inside a flex container, so I align it into the middle
     */
    .logo {
        display: flex;
        align-items: center;
    }

    .logo svg {
        width: 150px; /* Gives logo enough room to breathe */
    }

    .nav {
        display: none;
        flex-direction: row;
        align-items: center;
        margin: 0;
        padding-left: 0;
    }

    @media (min-width: 1085px) {
        .nav {
            display: flex;
        }
        .nav-right{
            margin-right: 50px;
        }
        .global-header{
            padding-left: 25px;
        }

    }

    ul {
        list-style: none;
    }

    .nav li {
        font-size: 14px;
        margin: 0 5px;
        cursor: pointer;
        color: #1d1d1d;
        font-weight: bolder;
    }

    .nav-right {
        align-items: center;
        display: flex;
        justify-content: flex-end;
    }

    /* DROPDOWN MENU */
    .dropdown-menu {
        background-color: white;
        box-shadow: 0 0 2rem rgba(0,0,0,.1); /* creates a border */
        display: none;
        padding: 15px;
        position: absolute; /* pops element up in the dom */
        top: 60px; /* just visually aligned this */
        width: 250px;
        z-index: 10; /* how much popping up does it go? I use multiples of 10 */
    }



    /* When there is no space between the selectors, it means both selectors have to be on the one element */
    /* We are doing this so we can reuse the .dropdown-menu properties on all menus but position them differently */
    .dropdown-menu#menu-1 {
        left: 190px;
    }


    .dropdown-menu#menu-2 {
        left: 290px;
        min-width: 200px; /* to stretch the menu to match slack */
    }

    .dropdown-menu#menu-3 {
        left: 390px;
        min-width: 50px; /* to stretch the menu to match slack */
    }

    #menu-1-button, #menu-2-button, #menu-3-button{
        padding: 20px;
    }

    #menu-1-button:hover #menu-1{
        display:block;
    }

    .up-arrow:after{
        content: url('https://api.iconify.design/eva:arrow-ios-downward-outline.svg?color=%23454545&height=24');
        vertical-align: -0.125em;
    }


    #menu-2-button:hover #menu-2{
        display:block;
    }

    #menu-3-button:hover #menu-3{
        display:block;
    }
    .menu-header {
        font-size: 12px;
        margin: 0;
        padding: 0 10px 8px 10px; /* eyeballin' it - you know */
        text-transform: uppercase;
    }

    .menu-item-list {
        margin: 0;
        padding-left: 0;
    }

    /**
     * You may notice on the Slack site that there are 2 columns in the 2nd and 3rd menus dropdowns
     * This is accomplished with an infrequently used css property: column-count
     * It makes a single list flow into two columns, works similar to CSS grid but has the advantage of simple HTML just a big <ul> is needed
     * Also, notice the selectors here - I'm using the unique ID of the second and third menu but including the class on the <ul> - why?
     * This way we can target each individual list with out adding in another class
     */

    #menu-3 .menu-item-list {
        column-count: 2;
        column-gap: 25px;
    }

    #menu-2 .menu-item-list {
        column-count: 3;
        column-gap: 40px;
    }


    .menu-item-list li a,
    .menu-item-list li a:visited,
    .menu-item-list li a:focus {
        color: #454545;
        display: block;
        padding: 10px; /* just a little padding on the top and bottom */
        text-decoration: none;
    }

    .menu-item-list li a:hover {
        background-color: rgb(242,242,242);
        color: #1264a3;
    }

    /* Fade-in header */
    #fade-in-header {
        display: none;
        position: fixed;
        top: 0;
    }

    #top-nav {
        top:0;
    }

    .show {
        display: block;
    }


    /* SIDE MENU */
    .workspaces {
        background-color: #611f69;
        border-radius: 5px;
        color: white;
        cursor: pointer;
        display: none; /* and like that...it's gone */
        padding: 6px 15px 12px 15px;
        transition: all 420ms ease-in-out; /* what's this? explore a bit... */
    }

    .workspaces-1 {
        border: 1px solid #611f69;
        border-radius: 5px;
        color:  #611f69;
        cursor: pointer;
        display: none; /* and like that...it's gone */
        padding: 10px 15px 11px 15px;
        margin-right: 20px;
    }

    /* Notice you can do a hover state on an element, not just <a> links */
    .workspaces:hover {
        background-color: #4a154b
    }

    @media (min-width: 1085px) {
        .workspaces, .workspaces-1  {
            display: block; /* and it's back, the power of display none! */
        }
    }

    .hamburger-menu {
        display: block; /* display:none starts to show up with responsive */
        cursor: pointer;
    }

    /* why this breakpoint? ask the slack people - they choose it (it's not great tbh) */
    @media (min-width: 1085px) {
        .hamburger-menu {
            display: none;
        }
    }

    /**
     * =============
     * OFF-CANVAS MENU
     * =============
     *
     * Lot going on here, let's break it down
     * Slack has an image with a translucent bg which combines bg color and image together
     * position: fixed with 0,0,0,0 positions streches across the viewport
     * z-index: 2 keeps it on top of the rest of the page
     * I'm breaking the side-menu parent into two styles, one position and on design, so you can see how this looks better
     * You don't have to do it this way at all...but it helps to see the separation of concerns here
     */
    .side-menu-position {
        padding-top: 25px;
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 2;
    }

    .side-menu-design {
        background-color: #611f69;
        background-image: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/2522641/sidebar-background.png');
        background-size: 1300px 700px;
        background-repeat: repeat;
        cursor: pointer;
        opacity: 0;
        transform: translateX(100%);
        transition: 0.4s ease-in-out;
    }

    /* on top we need spacing from the border, so we have to use padding */
    /* but we also want that bottom margin to bleed to the edge, so no margins here */
    .side-menu-header {
        border-bottom: 1px solid rgba(255,255,255,.1); /* based on slack look, very faint */
        display: flex;
        justify-content: space-between;
        padding: 0 25px 25px 25px;
    }

    /* Main content is pretty easy for layouts, pattern you'll see in web dev */
    /* The more text an element has, the easier it is to layout - BAM wisdom bomb! */
    .side-menu-content {
        color: #fff;
        font-size: 24px; /* could use ems here I guess but eh... */
        margin: 25px;
        padding-left: 0; /* zeroing it out */
    }

    .side-menu-content li {
        list-style: none;
        margin-bottom: 25px;
    }

    .side-menu-workspace {
        margin-bottom: 8px;
        text-align: center;
    }

    .side-menu-download {
        background-color: #fff;
        color: #611f69;
        padding: 15px 0;
        text-align: center;
        width: 100%;
    }

    .side-menu-item-list{
        margin-top: 15px;
        display: none;
    }

    .show-it{
        display: block;
    }

    .arrow, .arrow2, .arrow3, .arrow4{
        position: relative;
        top: 3px;
    }

    .arrow5{
        position: relative;
        top: 5px;
    }

    .side-menu-item-list a{
        text-decoration: none;
        color: #fff;
        font-size: 24px; /* could use ems here I guess but eh... */
        margin-top: 15px;
    }

    /* Sticks the nav to the top of the page */
    #top-nav {
        position: static;
    }




    /**
     * Animation classes
     */
    .show-menu {
        opacity: 1;
        transform: translateX(0%);
    }





    /* ==========================================================================
       Helper classes
       ========================================================================== */

    /*
     * Hide visually and from screen readers
     */

    .hidden {
        display: none !important;
    }

    /*
     * Hide only visually, but have it available for screen readers:
     * https://snook.ca/archives/html_and_css/hiding-content-for-accessibility
     *
     * 1. For long content, line feeds are not interpreted as spaces and small width
     *    causes content to wrap 1 word per line:
     *    https://medium.com/@jessebeach/beware-smushed-off-screen-accessible-text-5952a4c2cbfe
     */

    .visuallyhidden {
        border: 0;
        clip: rect(0 0 0 0);
        -webkit-clip-path: inset(50%);
        clip-path: inset(50%);
        height: 1px;
        margin: -1px;
        overflow: hidden;
        padding: 0;
        position: absolute;
        width: 1px;
        white-space: nowrap; /* 1 */
    }

    /*
     * Extends the .visuallyhidden class to allow the element
     * to be focusable when navigated to via the keyboard:
     * https://www.drupal.org/node/897638
     */

    .visuallyhidden.focusable:active,
    .visuallyhidden.focusable:focus {
        clip: auto;
        -webkit-clip-path: none;
        clip-path: none;
        height: auto;
        margin: 0;
        overflow: visible;
        position: static;
        width: auto;
        white-space: inherit;
    }

    /*
     * Hide visually and from screen readers, but maintain layout
     */

    .invisible {
        visibility: hidden;
    }


    .arrow-rotate {
        transform: rotate(180deg);
        animation: rotate 300ms ease-in-out;
    }
    @keyframes rotate {
        0% {
            transform: rotate(0);
        }
        100% {
            transform: rotate(180deg);
        }
    }
    .arrow-rotate2 {
        transform: rotate(-90deg);
        animation: rotate2 300ms ease-in-out;
    }
    @keyframes rotate2 {
        0% {
            transform: rotate(0);
        }
        100% {
            transform: rotate(-90deg);
        }
    }
</style>
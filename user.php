<?php include
'basics.php';
?>
<?php
$conn = mysqli_connect('localhost','arbapal','areejbaraa2002','palestine');

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
    header('location:login.php');
};

if(isset($_GET['logout'])){
    unset($user_id);
    session_destroy();
    header('location:login.php');
};

if(isset($_POST['add_to_bookpackge'])){

    $code = $_POST['code'];

    $select_cart = mysqli_query($conn, "SELECT * FROM `bookpackge` WHERE code = '$code' AND idmem = '$user_id'") or die('query failed');

    if(mysqli_num_rows($select_cart) > 0){
        $message[] = 'packge already added to cart!';
    }else{
        mysqli_query($conn, "INSERT INTO `bookpackge`(autopackge, idmem, code) VALUES('','$user_id', '$code')") or die('query failed');
        $message[] = 'packge added to cart!';
    }

};

/*if(isset($_POST['update_packge'])){
    $update_quantity = $_POST['quantity'];
    $update_code = $_POST['packge_code'];
    mysqli_query($conn, "UPDATE `bookpackge` SET number = '$update_quantity' WHERE code = '$update_code'") or die('query failed');
    $message[] = 'packge quantity updated successfully!';
}

if(isset($_GET['remove'])){
    $remove_id = $_GET['remove'];
    mysqli_query($conn, "DELETE FROM `bookpackge` WHERE code = '$remove_id'") or die('query failed');
    header('location:user.php');
}

if(isset($_GET['delete_all'])){
    mysqli_query($conn, "DELETE FROM `bookpackge` WHERE idmem = '$user_id'") or die('query failed');
    header('location:user.php');
}*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="favicon_io/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style1.css">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <!--card-->
    <link rel="stylesheet" href="css/card1.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <title>Tour Package</title>
    <!-- custom css Profile button  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Roboto+Condensed');
    </style>

</head>
<body onload="location.href='#start'">
<?php
setnav();
?>
<?php
if(isset($message)){
    foreach($message as $message){
        echo '<div class="message" onclick="this.remove();">'.$message.'</div>';
    }
}
?>

<div class="container">

    <div class="user-profile">

        <?php
        $select_user = mysqli_query($conn, "SELECT * FROM `member` WHERE idmem = '$user_id'") or die('query failed');
        if(mysqli_num_rows($select_user) > 0){
            $fetch_user = mysqli_fetch_assoc($select_user);
        };
        ?>
        <p> username : <span><?php echo $fetch_user['name']; ?></span> </p>
        <p> email : <span><?php echo $fetch_user['Email']; ?></span> </p>
        <!--div-- class="flex">
            <a href="login.php" class="btn1">login</a>
            <a href="register_form.php" class="option-btn">register</a>
            <a href="user.php?logout=<!?php echo $user_id; ?>" onclick="return confirm('are your sure you want to logout?');" class="delete-btn">logout</a>
        </div-->

    </div>

    <div class="products">

        <h1 class="heading" id="start"style="color: #eeeeee;font-size: 90px;background: linear-gradient(
                to right bottom,
                rgba(48, 110, 255, 0.8),
                rgba(204, 0, 255, 0.8)
        );">Our packeges</h1>

        <div class="box-container">

            <?php
            $select_product = mysqli_query($conn, "SELECT * FROM `tourpackage`") or die('query failed');
            if(mysqli_num_rows($select_product) > 0){
                while($fetch_product = mysqli_fetch_assoc($select_product)){
                    ?>
                    <form method="post" class="box" action="" id="subbtn">
                        <div class="wrappe">
                            <div class="containe">
                                <div class="top" style="background: url('pakege/<?php echo $fetch_product['photo']; ?>') no-repeat center center;"></div>
                                <div class="bottom">
                                    <div class="left">
                                        <div class="details">
                                            <h1><?php echo $fetch_product['name']; ?></h1>
                                            <h1><?php echo $fetch_product['city']; ?></h1>
                                            <h2 style="color: #8c51a5"><?php echo $fetch_product['price']; ?></h2>
                                        </div>
                                        <input class=" buy btn material-icons" type="submit" value="add to cart" id="<?php $fetch_product['name']; ?>" name="add_to_bookpackge" >
                                    </div>
                                    <div class="right">
                                        <div class="done"><i class="material-icons">done</i></div>
                                        <div class="details">
                                            <h1><?php echo $fetch_product['name']; ?></h1>
                                            <p>Added to your cart</p>
                                        </div>
                                        <div class="remove"><i class="material-icons">clear</i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="inside">
                                <div class="icon"><i class="material-icons">info_outline</i></div>
                                <div class="contents">
                                    <table>
                                        <tr>
                                            <th>type</th>
                                            <th>price</th>
                                        </tr>
                                        <tr>
                                            <td><?php echo $fetch_product['type']; ?></td>
                                            <td><?php echo $fetch_product['price']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>more information</th>
                                            <th>♥</th>
                                        </tr>
                                        <tr>
                                            <td><?php echo $fetch_product['info']; ?></td>
                                            <td>.</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- jQuery code for all 'wrappe' elements -->
                        <script>
                            $('.wrappe').each(function() {
                                var $thisWrappe = $(this);
                                var $thisBuyBtn = $thisWrappe.find('.buy');
                                var $thisRemoveBtn = $thisWrappe.find('.remove');
                                var $thisBottom = $thisWrappe.find('.bottom');

                                $thisBuyBtn.click(function(){
                                    $thisBottom.addClass("clicked");
                                    document.getElementById('<?php $fetch_product['code']; ?>').click();
                                });

                                $thisRemoveBtn.click(function(){
                                    $thisBottom.removeClass("clicked");
                                });
                            });
                            const myDiv = document.getElementById('subbtn1');
                            const myForm = document.getElementById('subbtn');
                            myDiv.addEventListener('click', () => {
                                myForm.submit();
                            });
                        </script>
                        <input type="hidden" name="code" value="<?php echo $fetch_product['code']; ?>">
                    </form>
                    <?php
                };
            };
            ?>

        </div>

    </div>


</div>
<?php
setfooter();
?>
</body>
</html>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');

    :root{
        --blue:#3498db;
        --red:#e74c3c;
        --orange:#f39c12;
        --grdu:linear-gradient(
                to right bottom,
                rgba(48, 110, 255, 0.8),
                rgba(204, 0, 255, 0.8)
        );
        --black:#333;
        --white:#fff;
        --light-bg:#eee;
        --box-shadow:0 5px 10px rgba(0,0,0,.1);
        --border:0px solid var(--black);
    }
    .message{
        position: sticky;
        top:0; left:0; right:0;
        padding:15px 10px;
        background-color: var(--white);
        text-align: center;
        z-index: 1000;
        box-shadow: var(--box-shadow);
        color:var(--black);
        font-size: 20px;
        text-transform: capitalize;
        cursor: pointer;
    }

    .btn1,
    .delete-btn,
    .option-btn{
        display: inline-block;
        padding:10px 30px;
        cursor: pointer;
        font-size: 18px;
        color:var(--white);
        border-radius: 5px;
        text-transform: capitalize;
    }

    .btn1:hover,
    .delete-btn:hover,
    .option-btn:hover{
        background-color: var(--black);
    }

    .btn1{
        background: var(--grdu);
        margin-top: 10px;
    }

    .delete-btn{
        background: var(--grdu);
    }

    .option-btn{
        background: var(--grdu);
    }

    .form-container form{
        width: 500px;
        border-radius: 5px;
        border:var(--border);
        padding:20px;
        text-align: center;
        background-color: var(--white);
    }

    .form-container form h3{
        font-size: 30px;
        margin-bottom: 10px;
        text-transform: uppercase;
        color:var(--black);
    }

    .form-container form .box{
        width: 100%;
        border-radius: 5px;
        /*border:var(--border);*/
        padding:12px 14px;
        font-size: 18px;
        margin:10px 0;
    }

    .form-container form p{
        margin-top: 20px;
        font-size: 20px;
        color:var(--black);
    }

    .form-container form p a{
        background:var(--grdu);
    }

    .form-container form p a:hover{
        text-decoration: underline;
    }

    .container{
        padding:0 20px;
        margin:0 auto;
        max-width: 1200px;
        padding-bottom: 70px;
    }


    .container .user-profile{
        padding:20px;
        text-align: center;
        border:var(--border);
        background-color: var(--white);
        box-shadow: var(--box-shadow);
        border-radius: 5px;
        margin:20px auto;
        max-width: 500px;
    }

    .container .user-profile p{
        margin-bottom: 10px;
        font-size: 25px;
        color:var(--black);
    }

    .container .user-profile p span{
        color:var(--red);
    }

    .container .user-profile .flex{
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap:10px;
        align-items: flex-end;
    }

    .container .products .box-container{
        display: flex;
        flex-wrap: wrap;
        gap:15px;
        justify-content: center;
    }

    .container .products .box-container .box{
        text-align: center;
        border-radius: 5px;
        box-shadow: var(--box-shadow);
        border:var(--border);
        position: relative;
        padding:20px;
        background-color: var(--white);
        width: 350px;
    }

    .container .products .box-container .box img{
        height: 250px;
    }



    .container .products .box-container .box input[type="number"]{
        margin:10px 0;
        width: 100%;
        border:var(--border);
        border-radius: 5px;
        font-size: 20px;
        color:var(--black);
        padding:12px 14px
    }


    .container .shopping-cart table{
        width: 100%;
        text-align: center;
        border:var(--border);
        border-radius: 5px;
        box-shadow: var(--box-shadow);
        background-color: var(--white);
    }

    .container .shopping-cart table thead{
        background-color: var(--black);
    }

    .container .shopping-cart table thead th{
        padding:10px;
        color:var(--white);
        text-transform: capitalize;
        font-size: 20px;
    }


    .container .shopping-cart table tr td{
        padding:10px;
        font-size: 20px;
        color:var(--black);
    }

    .container .shopping-cart table tr td:nth-child(1){
        padding:0;
    }

    .container .shopping-cart table tr td input[type="number"]{
        width: 80px;
        border:var(--border);
        padding:12px 14px;
        font-size: 20px;
        color:var(--black);
    }

    .container .shopping-cart .cart-btn{
        margin-top: 10px;
        text-align: center;
    }

    .container .shopping-cart .disabled{
        pointer-events: none;
        background-color: var(--red);
        opacity: .5;
        user-select: none;
    }


    @media (max-width:1200px){
        .container .shopping-cart{
            overflow-x: scroll;
        }

        .container .shopping-cart table{
            width: 1200px;
        }
    }

    @media (max-width:450px){
        .container .heading{
            font-size: 30px;
        }
        .container .products .box-container .box img{
            height: 200px;
        }
    }
</style>
<style>
    .wrappe {
        width: 300px;
        height: 500px;
        margin: auto;
        position: relative;
        overflow: hidden;
        border-radius: 10px 10px 10px 10px;
        transform: scale(0.95);
        transition: box-shadow 0.5s, transform 0.5s;
    }
    .wrappe:hover {
        transform: scale(1);
        box-shadow: 5px 20px 30px rgba(0, 0, 0, 0.2);
    }
    .wrappe .containe {
        width: 100%;
        height: 100%;
    }
    .wrappe .containe .top {
        height: 80%;
        width: 100%;
        -webkit-background-size: 100%;
        -moz-background-size: 100%;
        -o-background-size: 100%;
        background-size: 100%;
    }
    .wrappe .containe .bottom {
        width: 200%;
        height: 20%;
        transition: transform 0.5s;
    }
    .wrappe .containe .bottom.clicked {
        transform: translateX(-50%);
    }
    .wrappe .containe .bottom h1 {
        margin: 0;
        padding: 0;
    }
    .wrappe .containe .bottom p {
        margin: 0;
        padding: 0;
    }
    .wrappe .containe .bottom .left {
        height: 100%;
        width: 50%;
        background: #f4f4f4;
        position: relative;
        float: left;
    }
    .wrappe .containe .bottom .left .details {
        padding: 20px;
        float: left;
        width: calc(70% - 40px);
    }
    .wrappe .containe .bottom .left .buy {
        float: right;
        width: calc(30% - 2px);
        height: 100%;
        background: #f1f1f1;
        transition: background 0.5s;
        border-left: solid thin rgba(0, 0, 0, 0.1);
    }
    .wrappe .containe .bottom .left .buy i {
        font-size: 30px;
        padding: 30px;
        color: #254053;
        transition: transform 0.5s;
    }
    .wrappe .containe .bottom .left .buy:hover {
        background: #a6cdde;
    }
    .wrappe .containe .bottom .left .buy:hover i {
        transform: translateY(5px);
        color: #00394b;
    }
    .wrappe .containe .bottom .right {
        width: 50%;
        background: #a6cdde;
        color: white;
        float: right;
        height: 200%;
        overflow: hidden;
    }
    .wrappe .containe .bottom .right .details {
        padding: 20px;
        float: right;
        width: calc(70% - 40px);


    }
    input.btn.material-icons {
        background-color: #f4f4f4;
        color: #8e44ad;
    }
    .wrappe .containe .bottom .right .done {
        width: calc(30% - 2px);
        float: left;
        transition: transform 0.5s;
        border-right: solid thin rgba(255, 255, 255, 0.3);
        height: 50%;
    }
    .wrappe .containe .bottom .right .done i {
        font-size: 30px;
        padding: 30px;
        color: white;
    }
    .wrappe .containe .bottom .right .remove {
        width: calc(30% - 1px);
        clear: both;
        border-right: solid thin rgba(255, 255, 255, 0.3);
        height: 50%;
        background: #bc3b59;
        transition: transform 0.5s, background 0.5s;
    }
    .wrappe .containe .bottom .right .remove:hover {
        background: #9b2847;
    }
    .wrappe .containe .bottom .right .remove:hover i {
        transform: translateY(5px);
    }
    .wrappe .containe .bottom .right .remove i {
        transition: transform 0.5s;
        font-size: 30px;
        padding: 30px;
        color: white;
    }
    .wrappe .containe .bottom .right:hover .remove, .wrappe .containe .bottom .right:hover .done {
        transform: translateY(-100%);
    }
    .wrappe .inside {
        z-index: 9;
        background: #8c51a5;
        width: 140px;
        height: 140px;
        position: absolute;
        top: -70px;
        right: -70px;
        border-radius: 0px 0px 200px 200px;
        transition: all 0.5s, border-radius 2s, top 1s;
        overflow: hidden;
    }
    .wrappe .inside .icon {
        position: absolute;
        right: 85px;
        top: 85px;
        color: white;
        opacity: 1;
    }
    .wrappe .inside:hover {
        width: 100%;
        right: 0;
        top: 0;
        border-radius: 0;
        height: 80%;
    }
    .wrappe .inside:hover .icon {
        opacity: 0;
        right: 15px;
        top: 15px;
    }
    .wrappe .inside:hover .contents {
        opacity: 1;
        transform: scale(1);
        transform: translateY(0);
    }
    .wrappe .inside .contents {
        padding: 5%;
        opacity: 0;
        transform: scale(0.5);
        transform: translateY(-200%);
        transition: opacity 0.2s, transform 0.8s;
    }
    .wrappe .inside .contents table {
        text-align: left;
        width: 100%;
    }
    .wrappe .inside .contents h1, .wrappe .inside .contents p, .wrappe .inside .contents table {
        color: white;
    }
    .wrappe .inside .contents p {
        font-size: 13px;
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
    *, *:before, *:after {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    /* BUTTON
     ========================================== */
    .button {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 2;
    }
    .button button {
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        -moz-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        -o-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        font-family: inherit;
        background-color: #ffffff;
        border: 0;
        padding: 15px 25px;
        color: #000000;
        text-transform: uppercase;
        font-size: 21px;
        letter-spacing: 1px;
        width: 200px;
        overflow: hidden;
        outline: 0;
        -webkit-transition: all 0.4s;
        -moz-transition: all 0.4s;
        -o-transition: all 0.4s;
        transition: all 0.4s;
        visibility: visible;
        opacity: 1;
        font-weight: bold;
        box-shadow: 0px 6px 30px rgba(0, 0, 0, 0.6);
    }
    button#a4 {
        background-color: white;
    }
    .button button:hover {
        cursor: pointer;
        background-color: #8e6ac1;
        color: #ffffff;
    }
    .button button span {
        opacity: 1;
    }
    .button.clicked button {
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
    .pop-up .content .subscribe form {
        overflow: hidden;
    }
    .pop-up .content .subscribe form input {
        width: 100%;
        float: left;
        padding: 15px 20px;
        text-align: center;
        font-family: inherit;
        font-size: 1.1rem;
        letter-spacing: 0.05rem;
        outline: 0;
    }
    .pop-up .content .subscribe form input[type=email] {
        margin-bottom: 15px;
        border: 1px solid #bec1c5;
        -webkit-transition: all 0.4s;
        -moz-transition: all 0.4s;
        -o-transition: all 0.4s;
        transition: all 0.4s;
    }
    @media (min-width: 768px) {
        .pop-up .content .subscribe form input[type=email] {
            margin-bottom: 0px;
            width: 75%;
            border-right-width: 0px;
        }
    }
    .pop-up .content .subscribe form input[type=email]:focus {
        border-color: #3e4146;
    }
    .pop-up .content .subscribe form input[type=submit] {
        background-color: #8e6ac1;
        color: #ffffff;
        border: 1px solid #8e6ac1;
        -webkit-transition: all 0.4s;
        -moz-transition: all 0.4s;
        -o-transition: all 0.4s;
        transition: all 0.4s;
    }
    @media (min-width: 768px) {
        .pop-up .content .subscribe form input[type=submit] {
            width: 25%;
        }
    }
    .pop-up .content .subscribe form input[type=submit]:hover {
        cursor: pointer;
        background-color: #7349af;
        border-color: #7349af;
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
    *, *:before, *:after {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    /* BUTTON
     ========================================== */
    .button {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 2;
    }
    .button button {
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        -moz-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        -o-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        font-family: inherit;
        background-color: #ffffff;
        border: 0;
        padding: 15px 25px;
        color: #000000;
        text-transform: uppercase;
        font-size: 21px;
        letter-spacing: 1px;
        width: 200px;
        overflow: hidden;
        outline: 0;
        -webkit-transition: all 0.4s;
        -moz-transition: all 0.4s;
        -o-transition: all 0.4s;
        transition: all 0.4s;
        visibility: visible;
        opacity: 1;
        font-weight: bold;
        box-shadow: 0px 6px 30px rgba(0, 0, 0, 0.6);
    }
    .button button:hover {
        cursor: pointer;
        background-color: #8e6ac1;
        color: #ffffff;
    }
    .button button span {
        opacity: 1;
    }
    .button.clicked button {
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
    .pop-up .content .subscribe form {
        overflow: hidden;
    }
    .pop-up .content .subscribe form input {
        width: 100%;
        float: left;
        padding: 15px 20px;
        text-align: center;
        font-family: inherit;
        font-size: 1.1rem;
        letter-spacing: 0.05rem;
        outline: 0;
    }
    .pop-up.open {
        top: 370px;
    }
    .pop-up .content .subscribe form input[type=email] {
        margin-bottom: 15px;
        border: 1px solid #bec1c5;
        -webkit-transition: all 0.4s;
        -moz-transition: all 0.4s;
        -o-transition: all 0.4s;
        transition: all 0.4s;
    }
    @media (min-width: 768px) {
        .pop-up .content .subscribe form input[type=email] {
            margin-bottom: 0px;
            width: 75%;
            border-right-width: 0px;
        }
    }
    .pop-up .content .subscribe form input[type=email]:focus {
        border-color: #3e4146;
    }
    .pop-up .content .subscribe form input[type=submit] {
        background-color: #8e6ac1;
        color: #ffffff;
        border: 1px solid #8e6ac1;
        -webkit-transition: all 0.4s;
        -moz-transition: all 0.4s;
        -o-transition: all 0.4s;
        transition: all 0.4s;
    }
    @media (min-width: 768px) {
        .pop-up .content .subscribe form input[type=submit] {
            width: 25%;
        }
    }
    .pop-up .content .subscribe form input[type=submit]:hover {
        cursor: pointer;
        background-color: #7349af;
        border-color: #7349af;
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
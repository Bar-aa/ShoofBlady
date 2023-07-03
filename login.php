<?php include 'basics.php';?>

<?php
$conn = mysqli_connect('localhost','arbapal','areejbaraa2002','palestine');
if(isset($_POST['submit'])){


    $email =  $_POST['email'];
    $pass = mysqli_real_escape_string($conn, md5($_POST['password']));

    //$pass = $_POST['password'];
    $select = " SELECT * FROM member WHERE Email = '$email' and password = '$pass' ";
    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_array($result);
        if($row['user_type'] == 'admin'){
            $_SESSION['admin_name'] = $row['name'];
            $_SESSION['admin_photo'] = $row['Photo'];
            header('location:pageADMIN.php');
        }elseif($row['user_type'] == 'user'){
            $_SESSION['user_name'] = $row['name'];
            $_SESSION['user_id'] = $row['idmem'];
            header('location:home.php');
        }
    }else{
        $error[] = 'incorrect email or password!';
    }
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
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
    <div class="container" style="margin-bottom:100px;margin-top: 100px">
        <article class="card">
            <div class="card__publication">
                <img src="images/login.jpg" alt="" />
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
                <!--div class="forms"-->
                    <div class="form login ">
                        <span class="title">Login</span>
                        <form action="" method="post">
                            <?php
                            if(isset($error)){
                                foreach($error as $error){
                                    echo '<span class="error-msg" style="color: red">'.$error.'</span>';
                                };
                            };
                            ?>
                            <div class="input-field">
                                <!--email-->
                                <input type="email" placeholder="name@example.example" name="email" required  />
                                <i class="uil uil-envelope icon"></i>
                            </div>
                            <div class="input-field">
                                <!--password-->
                                <input type="password" placeholder="Password"  name="password" required />
                                <i class="uil uil-lock icon"></i>
                                <i class="uil uil-eye-slash showHidePw"></i>
                            </div>
                            <div class="checkbox-text">
                                <div class="checkbox-content">
                                    <input type="checkbox" id="logCheck">
                                    <label for="logCheck" class="text">Remember me</label>
                                </div>
                                <a href="#" class="text">Forgot password?</a>
                            </div>
                            <div class="input-field button">
                                <!--submit-->
                                <input type="submit" name="submit" value="Login" class="btn solid" />
                            </div>
                        </form>

                        <div class="login-signup">
                                <span class="text">Not a member?
                                    <a href="register_form.php" class="text signup-link">Signup Now</a>
                                </span>
                        </div>
                    </div>
                <!--/div-->
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
        max-width: 96rem;
        margin-inline: auto;
        padding-inline: 1.6rem;
        margin-bottom: 100px;
    }
    /* ======================== */
    .card {
        background-color: #fff;
        color: #333;
        box-shadow: 2px 0.8rem 1rem rgba(0, 0, 0, 0.025);
    }
    .card__publication {
        position: relative;
        height: 20rem;
        overflow: hidden;
        border: 5px solid #8e44ad;
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
        padding: 10px;
    }
    .card__title {
        font-size: 3rem;
    }
    .card__subtitle {
        display: inline-block;
        font-size: 1.4rem;
        font-weight: 400;
        text-transform: uppercase;
        color: #a2a2a2;
        margin-bottom: 1rem;
    }
    .card__cta {
        position: relative;
        display: inline-block;
        text-decoration: none;
        font-weight: bold;
        color: #2e6dff;
        margin-top: 2rem;
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
</style>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
    .container{
        position: relative;
        max-width: 100%;
        width: auto;
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 5px 10px #8c51a5;
        overflow: hidden;
        margin: 20px;
        padding: 10px;
    }
    .container .forms{
        display: flex;
        align-items: center;
        height: 440px;
        width: 150%;
        transition: height 0.2s ease;
    }
    .container .form{
        width: 100%;
        padding: 30px;
        background-color: #fff;
        transition: margin-left 0.18s ease;
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
        margin-top: 30px;
    }

    .input-field input{
        position: absolute;
        height: 100%;
        width: 100%;
        padding: 0 10px;
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

    .input-field i.icon{
        left: 0;
    }
    .input-field i.showHidePw{
        right: 0;
        cursor: pointer;
        padding: 10px;
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

    .form .text{
        color: #333;
        font-size: 14px;
    }

    .form a.text{
        color: #8c51a5 ;
        text-decoration: none;
    }
    .form a:hover{
        text-decoration: underline;
    }

    .form .button{
        margin-top: 35px;
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
    .form .login-signup{
        margin-top: 30px;
        text-align: center;
    }
    @media screen and (max-width: 400px) {
        .form{
            padding: 20px 10px;
        }

    }
</style>
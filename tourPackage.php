<?php include 'basics.php';?>
<?php include 'card.php';?>

<?php
$conn = mysqli_connect('localhost','arbapal','areejbaraa2002','palestine');

$sql="SELECT * FROM tourpackage";
$all_package =$conn->query($sql);
?>
<!doctype html>
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
</head>
<body style="background: linear-gradient(
                to right bottom,
                rgba(48, 110, 255, 0.8),
                rgba(204, 0, 255, 0.8)
        );">
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
<main style="display:flex;flex-wrap: wrap;align-items: center;">
    <?php
    while ($row =mysqli_fetch_assoc($all_package)){
        ?>

        <?php

        card($row["name"],$row["type"],$row["city"],$row['price'],$row["info"],$row['photo']);

        ?>

        <?php

    }

    ?>


</main>
<?php
setfooter();
?>
</body>
<script src="js/card.js"></script>
<script src="js/script.js"</script>
<script>
    window.onscroll = () =>{
        menu.classList.remove('fa-times');
        navbar.classList.remove('active');
    };
</script>
</html>
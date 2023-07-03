<?php

$conn = mysqli_connect('localhost','arbapal','areejbaraa2002','palestine');

if(isset($_POST['submit'])){

    $name = $_POST['TravelName'];
    $catalog =$_POST['Categories'];
    $place =$_POST['TravelPlace'];
    $price = $_POST['Price'];
    $info =$_POST['describe'];
    $image =$_POST['travelImg'];

    $select = " SELECT * FROM tourpackage WHERE name = '$name'";
    $result = mysqli_query($conn, $select);
    if(mysqli_num_rows($result) > 0){

        $error[] = 'tourpackage already exist!';

    }else{
        $insert = "INSERT INTO tourpackage (code,name,type,city,price,info,photo) VALUES(null,'$name','$catalog','$place','$price','$info','$image');";
        mysqli_query($conn, $insert);
        header('location:pageADMIN.php');
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
    <title>add travel</title>
    <link rel="shortcut icon" href="favicon_io/favicon.ico" type="image/x-icon" >
    <!-- arabic google font link  -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Gulzar&family=Work+Sans:ital,wght@0,200;0,300;0,400;0,500;0,800;1,600&display=swap');
    </style>
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/addtrastyle.css">
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/addtravel.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
</head>
<body >
<!-- header section starts  -->

<?php
setnav();
?>

<!-- header section ends -->

<!-- start admin page div -->
<form action="" method="post">

    <div class="container" style="background: linear-gradient(
                to right bottom,
                rgba(48, 110, 255, 0.5),
                rgba(204, 0, 255, 0.5)
        );">
        <div class="contact-box">
            <div class="left" style="background: url('images/car.jpg') no-repeat center;background-size: cover;
	height: 100%;"></div>
            <div class="right">
                <h2>ADD NEW TRAVEL </h2>
                <?php
                if(isset($error)){
                    foreach($error as $error){
                        echo '<span class="error-msg" style="color: red">'.$error.'</span>';
                    };
                };
                ?>
                <div >
                    <input type="text" name="TravelName" class="field" placeholder="Travel Name">
                    <input type="text" name="TravelPlace" class="field" placeholder="Travel Place">
                    <input type="number" class="field"name="Price" placeholder="Travel Price">
                    <select class="field Categories" id="Categories"required name="Categories">
                        <option hidden value=" " disabled selected>Product Categories</option>
                        <option value="self">self-guided Tour</option>
                        <option value="Full">Full-day Tour</option>
                        <option value="Half">Half-day Tour</option>
                        <option value="Night">Night Tour</option>
                    </select>
                    <input type="file" class="field" id="travelImg" name="travelImg"accept="image/png, image/jpeg">
                    <textarea placeholder="Trip description" class="field" id="describe" name="describe"></textarea>
                    <button type="submit" class="btn" name="submit" id="submit">ADD THE TRAVEL</button>
                </div>
            </div>
        </div>
    </div>
</form>

<!-- end admain page div -->

<!-- footer section starts  -->
<?php
setfooter();
?>
<!-- footer section ends -->
<!-- custom js file link  -->
<script src="js/script.js"></script>
</body>
</html>

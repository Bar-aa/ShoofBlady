
<?php
// Connect to the database
function fun()
{
    if (isset($_POST['id1']) && isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['salary']) && isset($_POST['city']) && isset($_POST['phone']) && isset($_POST['langu']) && isset($_POST['birthday'])) {
        $conn = mysqli_connect('localhost', 'arbapal', 'areejbaraa2002', 'palestine');

// Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        // $id = $_GET['id'];

// Prepare and sanitize the form data
        $idd = $_POST['id1'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $salary = $_POST['salary'];
        $citty = $_POST['city'];
        $phone = $_POST['phone'];
        $lang = $_POST['langu'];
        $birthdate = $_POST['birthday'];
         $img=$_POST['photo'];

// Construct the SQL INSERT statement
        $sql = "INSERT INTO dalel (idd,fname,lname,salary,languge,phone,city,photo,bd) VALUES ('$idd', '$fname', '$lname', '$salary','$lang','$phone','$citty','$img','$birthdate')";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            header("Location: viewdalel.php?msg=New record created successfully");
        } else {
            echo "Failed: " . mysqli_error($conn);


        }

        }

}

?>
<style>
    .pic{
        background: linear-gradient(rgba(0,0,0,0.30),rgba(0,0,0,0.30)),url(images/guasted.jpg);
        background-position:center ;
        background-repeat:no-repeat ;
        background-size:cover;

    }
</style>



<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/adddalel.css">
    <link rel="stylesheet" href="css/editinmysql.css">
    <meta charset="UTF-8">
    <title>Add Tourist Guide</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="back">
<div class="pic" >
    <div class="container" >
        <h2> Add Tourist Guide </h2 >
        <form  method = "post" >
    <label for="name">ID:</label>
    <input type="text" id="id1" name="id1" >
    <label for="contact">firstname:</label>
    <input type="text" id="fname" name="fname" >
    <label for="expertise">lastname:</label>
    <input type="text" id="lname" name="lname" >
    <label for="languages">Salary</label>
    <input type="text" id="salary" name="salary" >
    <label for="languages">city </label>
    <input type="text" id="city" name="city" >
    <label for="languages">phone</label>
    <input type="text" id="phone" name="phone" >
    <label for="languages">language</label>
    <input type="text" id="langu" name="langu" >
    <label for="birthday">Birthday:</label>
    <input class="Date"type="date" id="birthday" name="birthday">
    <label for="languages">Photo:</label>
    <input class="Filee" type="file" id="file" name="photo">
            <br>
            <div>
    <input  type = "submit" value = "Add data " name="add" onsubmit="<?php fun();?>">
            </div>
</form>
    </div >
</div >
</body>
</html>


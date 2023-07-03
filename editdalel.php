

<?php
function fun() {
    if(isset($_POST['phone1'])&&isset($_POST['s1'])&&isset($_POST['city'])&&isset($_POST['lang'])) {
      //  $db = new mysqli('localhost', 'root', '', 'courses');
        $conn = mysqli_connect('localhost','arbapal','areejbaraa2002','palestine');
// Check connection
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        $id = $_GET['id'];
        $phone = $_POST["phone1"];
        $salary = $_POST["s1"];
        $lang = $_POST["lang"];
        $citty = $_POST["city"];
        mysqli_query($conn, "UPDATE dalel SET salary='$salary',phone='$phone', city='$citty', languge='$lang' WHERE idd=$id");
    }
}
?>
<style>

      /*  background-color: #8c51a5;*/
    .back{
        background: linear-gradient(rgba(0,0,0,0.30),rgba(0,0,0,0.20)),url(images/edit.jpg);
        background-position:center ;
        background-repeat:no-repeat ;
        background-size: cover;
    }


</style>
<!DOCTYPE html>
<html >
<head >
    <title > Update Data </title >
    <link rel = "stylesheet" type = "text/css" href = "css/editinmysql.css" >
</head >
<body class="back">
<div >
    <div class="container" >
        <h2 > Update Data </h2 >
        <form    method = "post" >
            <label for="name" > phone:</label >
            <input  type = "text" id = "phone1" name = "phone1" ><br ><br >
            <label for="type" > city:</label >
            <input  type = "text" id = "city" name = "city" ><br ><br >
            <label for="city" > salary:</label >
            <input  type = "text" id = "s1" name ="s1" ><br ><br >
            <label for="price" > language:</label >
            <input  type = "text" id = "lang" name = "lang" ><br ><br >
            <input  type = "submit" value = "Update Data" onsubmit="<?php fun();?>">
        </form >
    </div >
</div >
</body >
</div >
</body >

</html >


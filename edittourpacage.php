
<?php
function fun() {
    if(isset($_POST['name'])&&isset($_POST['type'])&&isset($_POST['city'])&&isset($_POST['price'])&&isset($_POST['info'])) {
        //  $db = new mysqli('localhost', 'root', '', 'courses');
        $conn = mysqli_connect('localhost','arbapal','areejbaraa2002','palestine');
// Check connection
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        $id = $_GET['id'];

// Get form
        $name1 = $_POST["name"];
        $type1 = $_POST["type"];
        $price1 = $_POST["price"];
        $city1 = $_POST["city"];
        $information1 = $_POST["info"];
        mysqli_query($conn, "UPDATE tourpackage SET name='$name1',type='$type1', city='$city1', price='$price1', info='$information1' WHERE code=$id");
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
            <form  method = "post" >
                <label for="name" > Name:</label >
                <input method="post" type = "text" id = "name" name = "name" ><br ><br >
                <label for="type" > Type:</label >
                <input method="post" type = "text" id = "type" name = "type" ><br ><br >
                <label for="city" > City:</label >
                <input method="post" type = "text" id = "city" name = "city" ><br ><br >
                <label for="price" > Price:</label >
                <input method="post" type = "text" id = "price" name = "price" ><br ><br >
                <label for="info" > Information:</label >
                <input method="post" type = "text" id = "info" name = "info" ><br ><br >
                <input  type = "submit" value = "Update Data" onsubmit="<?php fun();?>">

            </form >
        </div >
    </div >
    </body >
</div >
</body >

</html >

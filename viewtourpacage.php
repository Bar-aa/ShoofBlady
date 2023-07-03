
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
  <!--  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">-->

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>

<br>
<br>

<div >
    <br>
    <br>
    <link rel="stylesheet" href="css/userstyle.css">

    <table class="table ">
        <thead>
        <tr>
            <th class="text-center">code</th>
            <th class="text-center">name</th>
            <th class="text-center">type</th>
            <th class="text-center">city</th>
            <th class="text-center">price</th>
            <th class="text-center">info</th>
            <th class="text-center">photo</th>
            <th class="text-center">Action</th>

        </tr>
        </thead>

        <?php

        $servername="localhost";
        $username="root";
        $password="";
        $db_name="palestine";
        $conn=new mysqli($servername,$username,$password,$db_name);

        /*$sql="SELECT * from p category WHERE product.category_id=category.category_id";*/
        $sql="SELECT * FROM tourpackage ";

        $result=$conn-> query($sql);
        $count=1;
        if ($result-> num_rows > 0){
            while ($row=$result-> fetch_assoc()) {
                ?>
                <tr>

                    <td><?=$row["code"]?></td>
                    <td><?=$row["name"]?></td>
                    <td><?=$row["type"]?></td>
                    <td><?=$row["city"]?></td>
                    <td><?=$row["price"]?></td>
                    <td><?=$row["info"]?></td>
                    <td><img height='100px' src='pakege/<?=$row["photo"]?>'></td>
                    <td>

                        <a href="deletetourpacage.php?id=<?php echo $row["code"] ?>" class="link-dark" style="color:#8c51a5 "><i class="fa-solid fa-trash fs-5"></i></a>
                        <a href="edittourpacage.php?id=<?php echo $row["code"] ?>" class="link-dark"style="color:#8c51a5 "><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                    </td>

                </tr>
                <?php
                $count=$count+1;
            }
        }
        ?>
    </table>
    <script>
        function myFunction() {
            window.location.href="addpackge.php";
        }
    </script>
    <div>
        <button type="button" class="btn btn-secondary" style="height:50px;width:150px;background-color:#9078c0 ;border-radius: 20px;" data-toggle="modal" data-target="#myModal"onClick="myFunction()" >
            <div style="color: white"> Add Toure </div>

        </button>
    </div>
</div>



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
<div >
    <br>
    <br>
    <link rel="stylesheet" href="css/userstyle.css">

    <table class="table ">
        <thead>
        <tr>
            <th class="text-center">autopackge</th>
            <th class="text-center">idmem</th>
            <th class="text-center">code</th>
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
        $sql="SELECT * FROM bookpackge";

        $result=$conn-> query($sql);
        $count=1;
        if ($result-> num_rows > 0){
            while ($row=$result-> fetch_assoc()) {
                ?>
                <tr>

                    <td><?=$row["autopackge"]?></td>
                    <td><?=$row["idmem"]?></td>

                    <td><?=$row["code"]?></td>
                    <td>

                        <a href="deletetourpacage.php?id=<?php echo $row["autopackge"] ?>" class="link-dark" style="color:#8c51a5 "><i class="fa-solid fa-trash fs-5">

                            </i></a>
                        <a href="edittourpacage.php?id=<?php echo $row["autopackge"] ?>" class="link-dark"style="color:#8c51a5 "><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                    </td>

                </tr>
                <?php
                $count=$count+1;
            }
        }
        ?>
    </table>
    <div>
        <button type="button" class="btn btn-secondary" style="height:50px;width:150px;background-color:#9078c0 ;border-radius: 20px;" data-toggle="modal" data-target="#myModal">
            <div style="color: white"> Add a Bookpackge </div>
        </button>
    </div>
</div>





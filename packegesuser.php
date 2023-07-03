<?php session_start();
function viw(){?>
<br>
<br>

<div >
    <br>
    <br>
    <link rel="stylesheet" href="css/userstyle.css">

    <table class="table ">
        <thead>
        <tr>
            <th class="text-center">Date</th>
            <th class="text-center">Seats</th>
            <th class="text-center">Name</th>
            <th class="text-center">type</th>
            <th class="text-center">City</th>
            <th class="text-center">Price</th>
            <th class="text-center">Photo</th>

        </tr>
        </thead>

        <?php

        $servername="localhost";
        $username="root";
        $password="";
        $db_name="palestine";
        $conn=new mysqli($servername,$username,$password,$db_name);
        $user_id = $_SESSION['user_id'];
        /*$sql="SELECT * from p category WHERE product.category_id=category.category_id";*/
        $sql="SELECT  bp.datee, bp.seats, tp.name, tp.type, tp.city, tp.price ,tp.Photo
        FROM bookpackge bp
        JOIN member m ON bp.idmem = m.idmem 
        JOIN tourpackage tp ON bp.code = tp.code
        WHERE bp.idmem = ".$user_id;

        $result=$conn-> query($sql);
        $count=1;
        if ($result-> num_rows > 0){
            while ($row=$result-> fetch_assoc()) {
                ?>
                <tr>

                    <td><?=$row["datee"]?></td>
                    <td><?=$row["seats"]?></td>
                    <td><?=$row["name"]?></td>
                    <td><?=$row["type"]?></td>
                    <td><?=$row["city"]?></td>
                    <td><?=$row["price"]?></td>
                    <td><img height='100px' src='pakege/<?=$row["Photo"]?>'></td>

                </tr>
                <?php
                $count=$count+1;
            }
        }
        ?>
    </table>
</div>

<?php }?>
<?php  function ubda(){
    $user_id = $_SESSION['user_id'];?>

    <br>
    <br>

    <div >
        <br>
        <br>
        <link rel="stylesheet" href="css/userstyle.css">

        <table class="table ">
            <thead>
            <tr>
                <th class="text-center">Date</th>
                <th class="text-center">Seats</th>
                <th class="text-center">Name</th>
                <th class="text-center">type</th>
                <th class="text-center">City</th>
                <th class="text-center">Price</th>
                <th class="text-center">Photo</th>
                <th class="text-center">Update</th>
            </tr>
            </thead>

            <?php

            $servername="localhost";
            $username="root";
            $password="";
            $db_name="palestine";
            $conn=new mysqli($servername,$username,$password,$db_name);

            /*$sql="SELECT * from p category WHERE product.category_id=category.category_id";*/
            $sql="SELECT  bp.datee, bp.seats, tp.name, tp.type, tp.city, tp.price ,tp.Photo
        FROM bookpackge bp
        JOIN member m ON bp.idmem = m.idmem 
        JOIN tourpackage tp ON bp.code = tp.code
        WHERE bp.idmem = ".$user_id;

            $result=$conn-> query($sql);
            $count=1;
            if ($result-> num_rows > 0){
                while ($row=$result-> fetch_assoc()) {
                    ?>
                    <form>
                    <tr>
                        <td><input style="background-color: #a6cdde" type="date" name="update_date" value="<?=$row["datee"]?>" class="box"></td>
                        <td><input style="background-color: #a6cdde" type="text" name="update_seats" value="<?=$row["seats"]?>" class="box"></td>
                        <td><?=$row["name"]?></td>
                        <td><?=$row["type"]?></td>
                        <td><?=$row["city"]?></td>
                        <td><?=$row["price"]?></td>
                        <input type="submit" value="Update" name="update_profile" class="btn">
                        <td><img height='100px' src='pakege/<?=$row["Photo"]?>'></td>
                        <td><input type="submit" value="Update" name="update_profile" class="btn"></td>
                    </tr>
                    </form>
                    <?php
                    $count=$count+1;
                }
            }
            ?>
        </table>
    </div>
<?php } ?>
<style>

    table {
        width: 100%;
        /*: 60%;*/
        border-collapse: collapse;
        border-spacing: 0;
        box-shadow: 0 2px 15px rgba(64, 64, 64, .7);
        border-radius: 12px 12px 0 0;
        margin-bottom: 50px;
    }

    td,
    th {
        padding: 10px 16px;
        padding: 8px 8px;
        text-align: center;
    }

    th {
        background-color: #9078c0;
        color: #fafafa;
        font-family: 'Open Sans', Sans-serif;
        font-weight: bold;
    }

    tr {
        width: 100%;
        /* width: 60%;*/

        background-color: #fafafa;
        font-family: 'Montserrat', sans-serif;
    }

    tr:nth-child(even) {
        background-color: #eeeeee;
    }

</style>
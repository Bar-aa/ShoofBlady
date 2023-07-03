<br>
<br>


    <table class="table ">
        <link rel="stylesheet" href="css/userstyle.css">
        <thead>
        <tr>
          <th class="text-center"> count</th>

            <th class="text-center"> name</th>
            <th class="text-center"> password </th>
            <th class="text-center"> Email </th>
            <th class="text-center"> phone</th>
            <th class="text-center"> photo</th>

        </thead>
        <?php
        $servername="localhost";
          $username="root";
$password="";
$db_name="palestine";
$conn=new mysqli($servername,$username,$password,$db_name);


        $sql="SELECT * FROM member";
        $result=$conn-> query($sql);
        $count=1;
        if ($result-> num_rows > 0){
            while ($row=$result-> fetch_assoc()) {

                ?>
                <tr>
                    <td><?=$count?></td>
                    <td><?=$row["name"]?> </td>
                    <td><?=$row["password"]?></td>
                    <td><?=$row["Email"]?></td>
                    <td><?=$row["Phone"]?></td>
                    <td><img height='100px' src='uploaded_img_member/<?=$row["Photo"]?>'></td>
                </tr>
                <?php
                $count=$count+1;

            }
        }
        ?>
    </table>

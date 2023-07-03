<div class="navbar">
    <link rel="stylesheet" href="css/Dashbord.css">



<!--site analysis section-->
<div class="container">
    <div class="row">
        <div class="column">
            <div class="card">
                <div class="player">
                    <div class="right-side"></div>
                    <div class="left-side" style="transform: rotate(189deg)"></div>
                    <div class="player-text">
                        <?php
                        $servername="localhost";
                        $username="root";
                        $password="";
                        $db_name="palestine";
                        $conn=new mysqli($servername,$username,$password,$db_name);
                        $sql="SELECT * from tourpackage";
                        $result=$conn-> query($sql);
                        $count=0;
                        if ($result-> num_rows > 0){
                            while ($row=$result-> fetch_assoc()) {

                                $count=$count+1;
                            }
                        }
                        echo $count;
                        ?>
                    </div>
                </div>
                <p>tourpackage</p>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <div class="player">
                    <div class="right-side-pageviews"></div>
                    <div class="left-side" style="transform: rotate(189deg)"></div>
                    <div class="player-text">
                        <?php
                        $servername="localhost";
                        $username="root";
                        $password="";
                        $db_name="palestine";
                        $sql="SELECT * from member";
                        $conn=new mysqli($servername,$username,$password,$db_name);
                        $result=$conn-> query($sql);

                        $count=0;
                        if ($result-> num_rows > 0){
                            while ($row=$result-> fetch_assoc()) {

                                $count=$count+1;
                            }
                        }
                        echo $count;
                        ?>
                    </div>
                </div>
                <p>Member</p>
            </div>
        </div>

        <!--div-- class="column">
            <div class="card">
                <div class="player">
                    <div class="right-side-online"></div>
                    <div class="left-side" style="transform: rotate(189deg)"></div>
                    <div class="player-text">
                        <!?php

                        $sql="SELECT * from masar";
                        $result=$conn-> query($sql);
                        $count=0;
                        if ($result-> num_rows > 0){
                            while ($row=$result-> fetch_assoc()) {

                                $count=$count+1;
                            }
                        }
                        echo $count;
                        ?>

                    </div>
                </div>
                <p>number of tracks</p>
            </div>
        </div-->

        <div class="column">
            <div class="card">
                <div class="player">
                    <div class="right-side-logged"></div>
                    <div class="left-side" style="transform: rotate(189deg)"></div>
                    <div class="player-text">
                        <?php

                        $sql="SELECT * from dalel";
                        $result=$conn-> query($sql);
                        $count=0;
                        if ($result-> num_rows > 0){
                            while ($row=$result-> fetch_assoc()) {

                                $count=$count+1;
                            }
                        }
                        echo $count;
                        ?>

                    </div>
                </div>
                <p>tourist guide</p>
            </div>
        </div>
    </div>
</div>






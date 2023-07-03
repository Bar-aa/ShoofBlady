
<?php
$servername="localhost";
$username="arbapal";
$password="areejbaraa2002";
$db_name="palestine";
$conn=new mysqli($servername,$username,$password,$db_name);
$sql = "DELETE FROM tourpackage WHERE code=";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>










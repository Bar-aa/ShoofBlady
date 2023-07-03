<?php


$conn = mysqli_connect('localhost','arbapal','areejbaraa2002','palestine');

session_start();
session_unset();
session_destroy();

header('location:login.php');

?>
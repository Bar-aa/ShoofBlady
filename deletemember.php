<?php
session_start();

// Establish database connection
$conn = mysqli_connect("localhost", "arbapal", "areejbaraa2002", "palestine");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the delete link was clicked and a member ID was provided
if (isset($_SESSION['user_id'])) {
    // Get the member's information
    $id = $_SESSION['user_id'];
    $sql = "SELECT idmem FROM member WHERE idmem = '$id'";
    $result = mysqli_query($conn, $sql);
    if ($result === false) {
        // Query failed, show error message
        die("Query failed: " . mysqli_error($conn));
    }
    if (mysqli_num_rows($result) == 1) {
            // Delete member from database
            $row = mysqli_fetch_assoc($result);
            $photo_file = $row["Photo"];
            unlink("uploaded_img_member/".$photo_file);
            $sql = "DELETE FROM member WHERE idmem = '$id'";
            mysqli_query($conn, $sql);
            $sql = "DELETE FROM bookpackge WHERE idmem = '$id'";
            mysqli_query($conn, $sql);
            /*session_unset();
            session_destroy();*/
            // Member deleted successfully, redirect to members page
            header("Location: home.php");
            exit();

    } else {
        // Member does not exist, redirect to members page
        header("Location: home.php");
        exit();
    }
} else {
    // No member ID provided or delete link not clicked, redirect to members page
    header("Location: ManegeUserPackeges.php");
    exit();
}

mysqli_close($conn);

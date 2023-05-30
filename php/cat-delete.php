<?php


require_once("connection.php");
require_once("sessions.php");
require_once("functions.php");


if($_GET['Delete']){
    $Name = $_GET['Delete'];
    
    $sql = "DELETE FROM categories WHERE name = '$Name'";

    $result = mysqli_query($conn, $sql);

    if($result){
        header("location:show-categories.php");
    }
}





?>
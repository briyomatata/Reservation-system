<?php


require_once("connection.php");
require_once("sessions.php");
require_once("functions.php");


if($_GET['Delete']){
    $Email = $_GET['Delete'];
    
    $sql = "DELETE FROM admins WHERE email = '$Email'";

    $result = mysqli_query($conn, $sql);

    if($result){
        header("location:admins.php");
    }
}





?>
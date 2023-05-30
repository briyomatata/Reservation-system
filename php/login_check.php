<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "events";


//creating database connection
$con = mysqli_connect($host, $username, $password, $database);

//checking the connection
if(!$con){
    die("Connection Failed: ". mysqli_connect_error());
}
if(isset($_POST["submit"])){}

$name = $_POST['name'];
$password = $_POST['password'];

$Query = "SELECT * from users where username ='".$name."' AND password ='".$password."'";
$result = mysqli_query($con, $Query);

$row = mysqli_fetch_array($result);

if($row["usertype"] == "admin"){
    $_SESSION['username'] = $name;
    $_SESSION['usertype'] = "admin";
    $_SESSION["SuccessMessage"] = "Welcome {$_SESSION["username"]} ";
    header("location:home.php");
}

else{

    $message = "Invalid username or password";
    $_SESSION['loginMessage'] = $message;

    header("location:admins.php");
}


?>
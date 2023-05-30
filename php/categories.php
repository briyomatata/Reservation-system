<?php

require_once("connection.php");
require_once("functions.php");
require_once("sessions.php");
?>

<?php
///Validation for the categories code 
if(isset($_POST["submit"])){
  $Name = ($_POST["name"]);
  $Price = ($_POST["price"]);
  $Post = ($_POST["post"]);
  date_default_timezone_set("Africa/Nairobi");
  $CurrentTime=time();
 // $DateTime = strftime("%Y-%m-%d %H:%M:%S", $CurrentTime);
$DateTime = strftime("%B-%d-%Y %H:%M:%S", $CurrentTime);
$DateTime;
$Image =$_FILES["Image"]['name'];
$Target ="Uploads/".basename($_FILES["Image"]['name']); //this code saves the pictures into the local databases
if(empty($Title)){
 
 echo "Product Name Can't Be Empty";
  
}
else{
  global $conn;
  //the data should be arrange according to the way it is in the database
  $Query = "INSERT INTO categories(datetime,name,price,image,post) VALUES('$DateTime','$Name' ,'$Price', '$Image', '$Post')";
  $Execute = mysqli_query($conn,$Query);
  move_uploaded_file($_FILES["Image"]["tmp_name"], $Target);
  if($Execute){
    // header("location: ../php/top.php");
    header("location: ../php/top.php ");
  }
  else{
    echo "Event Not Added ";
  }
}

}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Admin Panel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
     <link href="../styles/styles.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
<div id="wrapper">
    <nav class="navbar header-top fixed-top navbar-expand-lg  navbar-dark bg-dark">
      <div class="container">
      <a class="navbar-brand" href="#">Event</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav side-nav" >
          <li class="nav-item">
            <a class="nav-link" style="margin-left: 20px;" href="../php/admins.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="../php/admins.php" style="margin-left: 20px;">Admins</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="../php/categories.php" style="margin-left: 20px;">Categories</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="foods-admins/show-foods.html" style="margin-left: 20px;">Foods</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../bookings-admins/show-bookings.html" style="margin-left: 20px;">Bookings</a>
          </li>
        </ul>
        <ul class="navbar-nav ml-md-auto d-md-flex">
          <li class="nav-item">
            <a class="nav-link" href="../index.html">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link  dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              username
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Logout</a>
              
          </li>
                          
          
        </ul>
      </div>
    </div>
    </nav>
    <div class="container-fluid">
      <div class="col-sm-10">
        <h1>Add New Event</h1>
       
       
        <form method="POST" action="../php/categories.php" enctype="multipart/form-data">
                <!-- Email input -->
                <div class="form-outline mb-4 mt-4">
                <label for="exampleFormControlinput">Event Name</label>
                  <input type="text" name="name" id="form2Example1" class="form-control" placeholder="name"required />
                 
                </div>
                <div class="form-outline mb-4 mt-4">
                <label for="exampleFormControlinput">Event Price</label>
                  <input type="number" name="price" id="form2Example1" class="form-control" placeholder="price" required />
                 
                </div>
                <div class="form-outline mb-4 mt-4">
                  <input type="file" name="Image" id="form2Example1" class="form-control" required />
                 
                </div>
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Description</label>
                  <textarea class="form-control" name="post" id="exampleFormControlTextarea1" rows="3" required></textarea>
                </div>
               
              
                <br>
              

      
                <!-- Submit button -->
                <button type="submit" name="submit" class="btn btn-success  mb-4 text-center">Create Event</button>

          
              </form>

 


</div>
</div>
  </div>
<script type="text/javascript">

</script>
</body>
</html>
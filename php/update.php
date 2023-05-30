<?php

require_once("connection.php");
require_once("functions.php");
require_once("sessions.php");
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
       
        <form action = "categories.php" method="post" enctype="multipart/form-data">
        <div class="formgroup">
                    <label for="title"><span class ="FieldInfo">Product  Name:</span></label>
                    <input class="form-control" type="text" name="Title" id="title" placeholder="Product Name" required>
                    </div>

                    <div class="formgroup">
                    <label for="title"><span class ="FieldInfo">Event  Price:</span></label>
                    <input class="form-control" type="text" name="Price" id="title" placeholder="Product Price" required>
                    </div>



                    <div class="formgroup">
                    <label for="imageselect"><span class ="FieldInfo">Select Image:</span></label>
                    <input class="form-control" type="file" name="Image" id="imageselect" >
                    </div>

                    <div class="formgroup">
                    <label for="postarea"><span class ="FieldInfo">Description:</span></label>
                    <textarea class="form-control" name="Post" id="postarea" required ="true"></textarea>
                    </div>

                    <br>
                    <input class ="btn btn-success btn-lock" type="submit" name = "Submit" value ="Add New Event">
          
        </form>
        <br>
        

 


</div>
</div>
  </div>
<script type="text/javascript">

</script>
</body>
</html>
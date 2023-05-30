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
      <a class="navbar-brand" href="#">Events</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav side-nav" >
          <li class="nav-item">
            <a class="nav-link" style="margin-left: 20px;" href="../php/home.php">Home
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

          <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-4 d-inline">Events</h5>
              <a  href="../php/categories.php" class="btn btn-primary mb-4 text-center float-right">Create Events</a>

              <table class="table">
              <thead>
                <tr>
                    <th>Sr No.</th>
                    <th>Name</th>
                    <th>Price</th>
                    <!-- <th>Update</th> -->
                    <th>Description</th>
                    <th>Update</th>
                    <th>Delete</th>
                    
                    <?php
                    global $conn;
                $ViewQuery = "SELECT * FROM categories ORDER BY catid desc";
                $Execute = mysqli_query($conn, $ViewQuery);
                $SrNo = 0;
                while($DataRows = mysqli_fetch_array($Execute)){
                    $Id = $DataRows["catid"];
                    $Name = $DataRows["name"];
                    $Price = $DataRows["price"];
                    $Description = $DataRows["post"];
                    $SrNo++;
                



?>

<tr>
    <td><?php echo $SrNo; ?></td>
    <td><?php echo $Name; ?></td>
    <td><?php echo $Price; ?></td>  
    <td><?php echo $Description; ?></td>  
    <td> <a href="../php/update.php?Edit=<?php echo $Name; ?>">
    <span class ="btn btn-warning">Edit</span> </a> </td>
    <td> <a href="../php/cat-delete.php?Delete=<?php echo $Name; ?>">
    <span class ="btn btn-danger">Delete</span> </a> </td>
</tr>

<?php } ?>

                </tr>
                </thead>
               
              </table> 
            </div>
          </div>
        </div>
      </div>



  </div>
<script type="text/javascript">

</script>
</body>
</html>

<?php

require_once("connection.php");
require_once("functions.php");
require_once("sessions.php");
?>

<?php
if(isset($_GET['email'])){
  $Email = $_GET['email'];
  $delete = mysqli_query($con, "DELETE FROM `admins`  WHERE `email` = '$Email'");
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
      <a class="navbar-brand" href="#">Admin</a>
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
            <a class="nav-link" href="../foods-admins/show-foods.html" style="margin-left: 20px;">Foods</a>
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
           <?php
           


            ?>
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
              <h5 class="card-title mb-4 d-inline">Admins</h5>
             <a  href="../php/create-admin.php" class="btn btn-primary mb-4 text-center float-right">Create Admins</a>
              <table class="table">
                <thead>
                <tr>
                    <th>Sr No.</th>
                    <th>Username</th>
                    <th>Email</th>
                    <!-- <th>Update</th> -->
                    <th>Delete</th>
                    
                    <?php
                    global $conn;
                $ViewQuery = "SELECT * FROM admins ORDER BY id desc";
                $Execute = mysqli_query($conn, $ViewQuery);
                $SrNo = 0;
                while($DataRows = mysqli_fetch_array($Execute)){
                    $Id = $DataRows["id"];
                    $Username = $DataRows["username"];
                    $Email = $DataRows["email"];
                    $SrNo++;
                



?>

<tr>
    <td><?php echo $SrNo; ?></td>
    <td><?php echo $Username; ?></td>
    <td><?php echo $Email; ?></td>  
    <!-- <td> <span class ="btn btn-warning">Edit</span> </td> -->
    <td> <a href="../php/delete.php?Delete=<?php echo $Email; ?>">
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
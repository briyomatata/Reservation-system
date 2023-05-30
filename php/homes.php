<?php

require_once("connection.php");
require_once("functions.php");
require_once("sessions.php");
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events Website</title>

    <link rel="icon" type="image/x-icon" href="favicon.ico">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../css/style.css">
</head>


<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70">

      <!-- BOTTOM NAV -->
      <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">Events<span class="dot">.</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#testimonials">Testimonials</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#team">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#reviews">Reviews</a>
                    </li> -->
                    <li class="nav-item">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"
                    class="btn btn-brand ms-lg-3">Contact Us</a>
                    </li>

                    <li class="nav-item">
                      <a href="#" data-bs-toggle="modal" data-bs-target="#loginModal"
                  class="btn btn-brand ms-lg-3">Login</a>
                  </li>
                </ul>
               
            </div>
        </div>
    </nav>

    
    <!-- SLIDER -->
    <div class="owl-carousel owl-theme hero-slider">
        <div class="slide slide1">
            <div class="container">
                <div class="row">
                    <div class="col-12 lg-10 offset-lg-1 text-white">
                        <h1 class="display-3 my-4">Birthday<br />Events</h1>
                        <!-- <a href="#" class="btn btn-brand">Get Started</a>
                        <a href="#" class="btn btn-outline-light ms-3">Our work</a> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="slide slide2">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-10 offset-lg-1 text-white">
                        
                        <h1 class="display-3 my-4">Wedding<br/>Events</h1>
                        <!-- <a href="#" class="btn btn-brand">Get Started</a>
                        <a href="#" class="btn btn-outline-light ms-3">Our work</a> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="slide slide3">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-10 offset-lg-1 text-white">
                        
                        <h1 class="display-3 my-4">Graduation<br />Events</h1>
                        <!-- <a href="#" class="btn btn-brand">Get Started</a>
                        <a href="#" class="btn btn-outline-light ms-3">Our work</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- why us -->

    <section id="services" class="text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="intro">
                        <h1>WHY BOOK WITH US</h1>
                        <p class="mx-auto">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="service">
                        <img src="img/icon1.png" alt="">
                        <h5>Wedding Events</h5>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                            classical Latin literature from</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service">
                        <img src="img/icon2.png" alt="">
                        <h5>Graduation Events</h5>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                            classical Latin literature from</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service">
                        <img src="img/icon3.png" alt="">
                        <h5>Luncheon Events</h5>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                            classical Latin literature from</p>
                    </div>
                </div>
                
            </div>
        </div>
    </section>


    <section id="service" class="text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="intro">
                        <h1>NEW DESTINATIONS</h1>
                    </div>
                </div>
            </div>

            <div class="container">
            <?php  include ("../php/get-categories.php");?>

<?php  foreach($categories as $event){ ?>



<div class="row g-3 flex">
    <div class="col-lg-4 col-md-4">
        <div class="service">
            <img src="img/<?php echo $event['image']; ?>" alt="">
            <h5> <?php echo $event['name']; ?></h5>
            <p> <?php echo $event['post']; ?></p>
            <span> <B>Price</B> <?php echo $event['price']; ?></span>
            <span> <B>Time</B> <?php echo $event['datetime']; ?></span>
        </div>
    </div>
    
</div>
<?php } ?>
            </div>

           
        </div>
    </section>

    <!-- Testimonials -->
    <section class="bg-light" id="reviews">

      <div class="owl-theme owl-carousel reviews-slider container">
          <div class="review">
              <div class="person">
                  <img src="../Images/pic!.jpg" alt="">
                  <h5>Gael Rose</h5>
        
              </div>
              <h3>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut quis, rem culpa labore voluptate
                  ullam! In, nostrum. Dicta, vero nihil. Delectus minus vitae rerum voluptatum, excepturi incidunt ut,
                  enim nam exercitationem optio ducimus!</h3>
              <div class="stars">
                  <i class='bx bxs-star'></i>
                  <i class='bx bxs-star'></i>
                  <i class='bx bxs-star'></i>
                  <i class='bx bxs-star'></i>
                  <i class="bx bxs-star-half"></i>
              </div>
              <i class='bx bxs-quote-alt-left'></i>
          </div>
          <div class="review">
              <div class="person">
                  <img src="../Images/pic!.jpg" alt="">
                  <h5>Ralphael Matata</h5>
              
              </div>
              <h3>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut quis, rem culpa labore voluptate
                  ullam! In, nostrum. Dicta, vero nihil. Delectus minus vitae rerum voluptatum, excepturi incidunt ut,
                  enim nam exercitationem optio ducimus!</h3>
              <div class="stars">
                  <i class='bx bxs-star'></i>
                  <i class='bx bxs-star'></i>
                  <i class='bx bxs-star'></i>
                  <i class='bx bxs-star'></i>
                  <i class="bx bxs-star-half"></i>
              </div>
              <i class='bx bxs-quote-alt-left'></i>
          </div>
          <div class="review">
              <div class="person">
                  <img src="../Images/pic!.jpg" alt="">
                  <h5>Briyoo 1</h5>
                  
              </div>
              <h3>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut quis, rem culpa labore voluptate
                  ullam! In, nostrum. Dicta, vero nihil. Delectus minus vitae rerum voluptatum, excepturi incidunt ut,
                  enim nam exercitationem optio ducimus!</h3>
              <div class="stars">
                  <i class='bx bxs-star'></i>
                  <i class='bx bxs-star'></i>
                  <i class='bx bxs-star'></i>
                  <i class='bx bxs-star'></i>
                  <i class="bx bxs-star-half"></i>
              </div>
              <i class='bx bxs-quote-alt-left'></i>
          </div>
      </div>
  </section>


     <!-- Contact us Modal -->
     <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="container-fluid">
                        <div class="row gy-4">
                            <div class="col-lg-4 col-sm-12 bg-cover"
                                style="background-image: url(img/c2.jpg); min-height:300px;">
                                <div>

                                </div>
                            </div>
                            <div class="col-lg-8">
                                <form class="p-lg-5 col-12 row g-3">
                                    <div>
                                        <h1>Get in touch</h1>
                                        <p>Fell free to contact us and we will get back to you as soon as possible</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="userName" class="form-label">First name</label>
                                        <input type="text" class="form-control" placeholder="Jon" id="userName"
                                            aria-describedby="emailHelp">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="userName" class="form-label">Last name</label>
                                        <input type="text" class="form-control" placeholder="Doe" id="userName"
                                            aria-describedby="emailHelp">
                                    </div>
                                    <div class="col-12">
                                        <label for="userName" class="form-label">Email address</label>
                                        <input type="email" class="form-control" placeholder="Johndoe@example.com"
                                            id="userName" aria-describedby="emailHelp">
                                    </div>
                                    <div class="col-12">
                                        <label for="exampleInputEmail1" class="form-label">Enter Message</label>
                                        <textarea name="" placeholder="This is looking great and nice."
                                            class="form-control" id="" rows="4"></textarea>
                                    </div>

                                    <div class="col-12">
                                        <button type="submit" class="btn btn-brand">Send Message</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

     <!-- LoginModal -->

     <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-xl">
          <div class="modal-content">
              <div class="modal-body p-0">
                  <div class="container-fluid">
                      <div class="row gy-4">
                          <div class="col-lg-6 col-sm-12 bg-cover"
                              style="background-image: url(img/c2.jpg); min-height:300px;">
                              <div>
                                <form class="p-lg-5 col-12 row g-3">
                                  <div>
                                      <h1>Register</h1>
                                  </div>
                                  <div class="col-lg-6">
                                      <label for="userName" class="form-label">UserName</label>
                                      <input type="text" class="form-control" placeholder="Jon" id="userName"
                                          >
                                  </div>
                                  
                                  <div class="col-6">
                                      <label for="userName" class="form-label">Email address</label>
                                      <input type="email" class="form-control" placeholder="Johndoe@example.com"
                                          id="userName" >
                                  </div>

                                  <div class="col-6">
                                    <label for="location" class="form-label">Location</label>
                                    <input type="text" class="form-control" placeholder="Nairobi"
                                        id="userName" >
                                </div>
                                  <div class="col-lg-6">
                                    <label for="Password" class="form-label">Password</label>
                                    <input type="password" class="form-control" placeholder="Enter Password" id="userName"
                                        >
                                </div>
                                 

                                  <div class="col-12">
                                      <button type="submit" class="btn btn-brand">Register</button>
                                  </div>
                              </form>

                              </div>
                          </div>
                          <div class="col-lg-6">
                              <form class="p-lg-5 col-12 row g-3">
                                  <div>
                                      <h1>Login</h1>
                                  </div>
                                  <div class="col-lg-6">
                                      <label for="userName" class="form-label">UserName</label>
                                      <input type="text" class="form-control" placeholder="Jon" id="userName"
                                          aria-describedby="emailHelp">
                                  </div>
                                  
                                  <div class="col-6">
                                      <label for="userName" class="form-label">Email address</label>
                                      <input type="email" class="form-control" placeholder="Johndoe@example.com"
                                          id="userName" aria-describedby="emailHelp">
                                  </div>
                                  <div class="col-lg-6">
                                    <label for="Password" class="form-label">Password</label>
                                    <input type="password" class="form-control" placeholder="Enter Password" id="userName"
                                        >
                                </div>
                                 

                                  <div class="col-12">
                                      <button type="submit" class="btn btn-brand">Login</button>
                                  </div>
                              </form>
                          </div>
                      </div>
                  </div>
              </div>

          </div>
      </div>
  </div>

    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/app.js"></script>
    
</body>
</html>
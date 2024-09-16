<?php
  
  session_start();

?>
 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/> 
    <!-- links -->
    <?php require('links.php'); ?>

    <title>HOTEL -Home</title>
    <style>
        .custom-bg{
          background-color: #2ec1ac;
          border:1px solid #2ec1ac; 
        }
        .custom-bg:hover{
          background-color: #279e8c;
          border: #279e8c; 
        }
        .availability-form{
          margin-top: -50px;
          z-index: 2;
          position: relative;
        }
        @media screen and (max-width: 575px){
          .availability-form{
            margin-top: 25px;
            padding: 0 35px;
          }
        }
    </style>
</head>


<body class="bg-light">
   <!-- header -->


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
        <?php    $loginButtonText = isset($_SESSION['firstname']) ? $_SESSION['firstname'] : 'Login';  ?>


<nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
      <div class="container-fluid">
        <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="#">Hotel</a>
        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active me-2" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link me-2" href="rooms.php">Rooms</a>
            </li>
            <li class="nav-item">
              <a class="nav-link me-2" href="facilities.php">Facilities</a>
            </li>
            <li class="nav-item">
              <a class="nav-link me-2" href="contact.php">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link me-2" href="about.php">About</a>
            </li>
          </ul>
          <div class="d-flex">
          <!-- <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#loginModal">
              LOG OUT
            </button> -->
            <button id="registerButton" type="button" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal" data-bs-target="#registerModal">
              Register
            </button>
          </div>
        </div>
      </div>
</nav>
    

    


    <div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
          
            <form id="register-form" method="POST">
                <div class="modal-header">
                    <h5 class="modal-title d-flex align-items-centre">
                        <i class="bi bi-person-lines-fill fs-3 me-2"></i>User Register
                    </h5>
                    <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body ">
                    <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
                        Note:Your details must match with your ID (Adhaar card, Driving Licence, Passport, etc..) that will be required while check-in.
                    </span>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">First Name</label>
                                    <input name="firstname" type="text" class="form-control shadow-none" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Last Name</label>
                                    <input name="lastname" type="text" class="form-control shadow-none" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <input name="email" type="email" class="form-control shadow-none" aria-describedby="emailHelp" required>
                                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Phone Number</label>
                                    <input name="phnnum" type="number" class="form-control shadow-none" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Password</label>
                                <input name="pass" type="password" class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Confirm Password</label>
                                <input name="cpass" type="password" class="form-control shadow-none" required>
                            </div>
                        </div>
                        <div class="text-center">
                            <button  name="submit" type="submit" >SUBMIT</button>
                        </div>
                    </div>
                </div>
            </form>
            <?php
            
              if(isset($_POST['submit'])){
                  $firstname = $_POST['firstname'];
                  $lastname = $_POST['lastname'];
                  $email = $_POST['email'];
                  $phno = $_POST['phnnum'];
                  $password = $_POST['pass'];
                  $cpassword = $_POST['cpass'];

                  $conn = new mysqli('localhost', 'root', '', 'hotel');

                  if($conn->connect_error){
                      die('Connection failed: ' . $conn->connect_error);
                  }
                  else {
                      if($password != $cpassword) {
                          echo "Passwords do not match.";
                      } else {
                          $stmt = $conn->prepare("INSERT INTO users(`firstname`, `lastname`, `email`, `phnnum`, `pass`, `cpass`)
                          VALUES(?, ?, ?, ?, ?, ?)");
                          $stmt->bind_param("ssssss", $firstname, $lastname, $email, $phno, $password, $cpassword);
                          if($stmt->execute()) {
                            echo '<script>
                              
                              document.getElementById("registerButton").innerText = "' . $firstname . '";
                            </script>';

                            } 
                          else {
                              echo "Error: " . $stmt->error;
                          }
                          $stmt->close();
                      }
                      $conn->close();
                  }
              }
          ?>

        </div>
    </div>
</div>



      

    <!--coursole-->

    <div class="container-fluid px-lg-4 mt-4">
      <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="img/img1.png" class="w-100 d-block">
          </div>
          <div class="swiper-slide">
            <img src="img/img2.png" class="w-100 d-block">
          </div>
          <div class="swiper-slide">
            <img src="img/img3.png"  class="w-100 d-block">
          </div>
          <div class="swiper-slide">
            <img src="img/img4.png"  class="w-100 d-block">
          </div>
          <div class="swiper-slide">
            <img src="img/img5.png"  class="w-100 d-block">
          </div>
          <div class="swiper-slide">
            <img src="img/img6.png"  class="w-100 d-block">
          </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
      </div>
    </div>

    <!--check availability-->
    <div class="container availability-form">
      <div class="row">
        <div class="col-lg-12 bg-white shadow p-4 rounded">
          <h5 class="mb-4">Checking avaliability</h5>
          <form>
            <div class="container">
              <div class="row align-items-end">
                <div class="col-lg-3 mb-3">
                  <label  class="form-label" style="font-weight: 500;">Check-In</label>
                  <input type="date" class="form-control shadow-none">
                </div>
                <div class="col-lg-3 mb-3">
                  <label  class="form-label" style="font-weight: 500;">Check-out</label>
                  <input type="date" class="form-control shadow-none">
                </div>
                <div class="col-lg-3 mb-3">
                  <label  class="form-label" style="font-weight: 500;">Adults</label>
                    <select class="form-select shadow-none" aria-label="Default select example">
                      <option selected>Adults</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <option value="9">9</option>
                      <option value="10">10</option>
                    </select>
                </div>
                <div class="col-lg-2 mb-3">
                  <label  class="form-label" style="font-weight: 500;">Children</label>
                    <select class="form-select shadow-none" aria-label="Default select example">
                      <option selected>Childrens</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                    </select>
                </div>
                <div class="col-lg-1 mb-3">
                  <button type="submit" class="btn text-white shadow-none custom-bg">Check</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!--Our Rooms-->
    
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Our Rooms</h2>
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <!-- cards -->
          <div class="card border-0 shadow-none" style="max-width:350px; margin:auto;">
              <img src="img/room1.png" class="card-img-top" >
                <div class="card-body">
                  <h5 class="card-title">Room</h5>
                  <h6 class="mb-4">₹2000 per Night</h6>
                  <div class="features mb-4">
                    <h6 class="mb-1">Features</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap mb-3">
                      2-Bedrooms
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap mb-3">
                      2-Bathrooms
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap mb-3">
                      1-Balconey
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap mb-3">
                      3-Sofa
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                      1-Living Room
                    </span>
                  </div>
                  <div class="facilities mb-4">
                    <h6 class="mb-1">Facilities</h6>
                      <span class="badge rounded-pill bg-light text-dark text-wrap mb-3">
                        Television
                      </span>
                      <span class="badge rounded-pill bg-light text-dark text-wrap mb-3">
                        Home Theatre
                      </span>
                      <span class="badge rounded-pill bg-light text-dark text-wrap mb-3">
                        Dining Table
                      </span>
                      <span class="badge rounded-pill bg-light text-dark text-wrap mb-3">
                        AC
                      </span>
                      <span class="badge rounded-pill bg-light text-dark text-wrap mb-3">
                        Room heater
                      </span>
                      <span class="badge rounded-pill bg-light text-dark text-wrap mb-3">
                        geyser
                      </span>
                  </div>
                  <div class="guests mb-4">
                    <h6 class="mb-1">Guests</h6>
                      <span class="badge rounded-pill bg-light text-dark text-wrap mb-3">
                        4 Adults
                      </span>
                      <span class="badge rounded-pill bg-light text-dark text-wrap mb-3">
                        2 Children
                      </span>                    
                  </div>
                  <div class="rating mb-4">
                    <h6 class="mb-1">Rating</h6>
                    <span class=" rounded-pill bg-light">
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-half text-warning"></i>
                    </span>
                  </div>
                  <div class="d-flex justify-content-evenly mb-2">
                      <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                      <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
                  </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <!-- cards -->
          <div class="card border-0 shadow-none" style="max-width:350px; margin:auto;">
              <img src="img/room1.png" class="card-img-top" >
                <div class="card-body">
                  <h5 class="card-title">Room</h5>
                  <h6 class="mb-4">₹2000 per Night</h6>
                  <div class="features mb-4">
                    <h6 class="mb-1">Features</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap mb-3">
                      2-Bedrooms
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap mb-3">
                      2-Bathrooms
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap mb-3">
                      1-Balconey
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap mb-3">
                      3-Sofa
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                      1-Living Room
                    </span>
                  </div>
                  <div class="facilities mb-4">
                    <h6 class="mb-1">Facilities</h6>
                      <span class="badge rounded-pill bg-light text-dark text-wrap mb-3">
                        Television
                      </span>
                      <span class="badge rounded-pill bg-light text-dark text-wrap mb-3">
                        Home Theatre
                      </span>
                      <span class="badge rounded-pill bg-light text-dark text-wrap mb-3">
                        Dining Table
                      </span>
                      <span class="badge rounded-pill bg-light text-dark text-wrap mb-3">
                        AC
                      </span>
                      <span class="badge rounded-pill bg-light text-dark text-wrap mb-3">
                        Room heater
                      </span>
                      <span class="badge rounded-pill bg-light text-dark text-wrap mb-3">
                        geyser
                      </span>
                  </div>
                  <div class="guests mb-4">
                    <h6 class="mb-1">Guests</h6>
                      <span class="badge rounded-pill bg-light text-dark text-wrap mb-3">
                        4 Adults
                      </span>
                      <span class="badge rounded-pill bg-light text-dark text-wrap mb-3">
                        2 Children
                      </span>                    
                  </div>
                  <div class="rating mb-4">
                    <h6 class="mb-1">Rating</h6>
                    <span class=" rounded-pill bg-light">
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-half text-warning"></i>
                    </span>
                  </div>
                  <div class="d-flex justify-content-evenly mb-2">
                      <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                      <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
                  </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <!-- cards -->
          <div class="card border-0 shadow-none" style="max-width:350px; margin:auto;">
              <img src="img/room1.png" class="card-img-top" >
                <div class="card-body">
                  <h5 class="card-title">Room</h5>
                  <h6 class="mb-4">₹2000 per Night</h6>
                  <div class="features mb-4">
                    <h6 class="mb-1">Features</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap mb-3">
                      2-Bedrooms
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap mb-3">
                      2-Bathrooms
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap mb-3">
                      1-Balconey
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap mb-3">
                      3-Sofa
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                      1-Living Room
                    </span>
                  </div>
                  <div class="facilities mb-4">
                    <h6 class="mb-1">Facilities</h6>
                      <span class="badge rounded-pill bg-light text-dark text-wrap mb-3">
                        Television
                      </span>
                      <span class="badge rounded-pill bg-light text-dark text-wrap mb-3">
                        Home Theatre
                      </span>
                      <span class="badge rounded-pill bg-light text-dark text-wrap mb-3">
                        Dining Table
                      </span>
                      <span class="badge rounded-pill bg-light text-dark text-wrap mb-3">
                        AC
                      </span>
                      <span class="badge rounded-pill bg-light text-dark text-wrap mb-3">
                        Room heater
                      </span>
                      <span class="badge rounded-pill bg-light text-dark text-wrap mb-3">
                        geyser
                      </span>
                  </div>
                  <div class="guests mb-4">
                    <h6 class="mb-1">Guests</h6>
                      <span class="badge rounded-pill bg-light text-dark text-wrap mb-3">
                        4 Adults
                      </span>
                      <span class="badge rounded-pill bg-light text-dark text-wrap mb-3">
                        2 Children
                      </span>                    
                  </div>
                  <div class="rating mb-4">
                    <h6 class="mb-1">Rating</h6>
                    <span class=" rounded-pill bg-light">
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-half text-warning"></i>
                    </span>
                  </div>
                  <div class="d-flex justify-content-evenly mb-2">
                      <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                      <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
                  </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 text-center mt-5">
              <a href="rooms.php"class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms>></a>
        </div>
      </div>
    </div>

    <!-- Our Facilities -->

  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Our Facilities</h2>
    <div class="container">
      <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
          <img src="img/wifi.svg" width="80px">
          <h5 class="mt-3">Wifi</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
          <img src="img/AC.svg" width="80px">
          <h5 class="mt-3">AC</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
          <img src="img/TV.svg" width="80px">
          <h5 class="mt-3">TV</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
          <img src="img/geaser.svg" width="80px">
          <h5 class="mt-3">Geaser</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
          <img src="img/massage.svg" width="80px">
          <h5 class="mt-3">Massage</h5>
        </div>
        <div class="col-lg-12 text-center mt-5">
          <a href="facilities.php"class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities>></a>
        </div>
      </div>
    </div>
  
    <!-- Testinomials -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Testinomials</h2>
  

    <!-- Reach Us -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
        <iframe class="w-100 rounded" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d61263.80511728251!2d80.39331875075592!3d16.32356660450231!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a4a755cb1787785%3A0x9f7999dd90f1e694!2sGuntur%2C%20Andhra%20Pradesh!5e0!3m2!1sen!2sin!4v1711821765028!5m2!1sen!2sin"   allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>      </div>
      <div class="col-lg-4 col-md-4">
        <div class="bg-white p-4 rounded mb-4">
          <h5>Call Us</h5>
          <a href="tel:+917989884067" class="d-inline-block mb-2 text-decoration-none text-dark">
            <i class="bi bi-telephone-fill"></i> +917989884067
          </a><br>
          <a href="tel:+917989884067" class="d-inline-block text-decoration-none text-dark">
            <i class="bi bi-telephone-fill"></i> +917989884067
          </a>
        </div>
        <div class="bg-white p-4 rounded mb-4">
          <h5>Follow Us</h5>
          <a href="#" class="d-inline-block mb-3">
            <span class="badge bg-light text-dark fs-6 p-2">
              <i class="bi bi-twitter-x me-1"></i> Twitter
            </span>
          </a><br>
          <a href="#" class="d-inline-block mb-3">
            <span class="badge bg-light text-dark fs-6 p-2">
              <i class="bi bi-instagram me-1"></i></i> Instagram
            </span>
          </a><br>
          <a href="#" class="d-inline-block ">
            <span class="badge bg-light text-dark fs-6 p-2">
              <i class="bi bi-facebook me-1"></i> Facebook
            </span>
          </a><br>
        </div>
      </div>
    </div>
  </div>
  
  <!-- footer -->

  <?php require('footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
      var swiper = new Swiper(".mySwiper", {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>
</body>
</html>
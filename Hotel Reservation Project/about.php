<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/> 
    <!-- links -->
    <?php require('links.php');?>
    <title>HOTEL -About</title>
    <style>
      .box{
        border-top-color: #2ec1ac !important;
      }
    </style>

</head>
<body class="bg-light">
    <!-- header -->
    <?php require('header.php');?>
    <div class="my-5 px-4">
      <h2 class="fw-bold h-font text-center">ABOUT US</h2>
      <div class="h-line bg-dark"></div>
      <p class="text-center mt-3">
        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
         Nulla ratione libero <br> similique cumque! Cum in dignissimos 
         ullam eveniet tempore? Odit?
      </p>
    </div>

    <div class="container">
      <div class="row justify-content-between align-items-center">
        <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
          <h3 class="mb-3">Lorem ipsum dolor sit.</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Vel explicabo porro ea perspiciatis quisquam esse deleniti.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Vel explicabo porro ea perspiciatis quisquam esse deleniti.
          </p>
        </div>
        <div class="col-lg-5 col-md-5 mb-4 order-lg-2  order-md-2 order-1">
          <img src="img/about.jpg" class="w-100" >
        </div>
      </div>
    </div>
    <div class="container mt-5">
      <div class="row">
        <div class="col-lg-3 col-md-6 mb-4 px-4">
          <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
            <img src="img/hotel.svg" width="70px">
            <h4 class="mt-3">100+ Rooms</h4>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 px-4">
          <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
            <img src="img/customers.svg" width="70px">
            <h4 class="mt-3">200+ Custmoers</h4>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 px-4">
          <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
            <img src="img/rating.svg" width="70px">
            <h4 class="mt-3">100+ Reviews</h4>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 px-4">
          <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
            <img src="img/staff.svg" width="70px">
            <h4 class="mt-3">200+ Staff</h4>
          </div>
        </div>
      </div>
    </div>

    <h3 class="my-5 fw-bold h-font text-center">MANAGEMENT TEAM</h3>
    <div class="container px-4">
      <div class="swiper mySwiper">
        <div class="swiper-wrapper mb-5">
          <div class="swiper-slide bg-white text-center overflow-hidden rounded">
            <img src="img/team.jpg" class="w-100">
            <h5 class="mt-2">Rishi</h5>
          </div>
          <div class="swiper-slide bg-white text-center overflow-hidden rounded">
            <img src="img/team.jpg" class="w-100">
            <h5 class="mt-2">Santhan</h5>
          </div>
          <div class="swiper-slide bg-white text-center overflow-hidden rounded">
            <img src="img/team.jpg" class="w-100">
            <h5 class="mt-2">Manoj</h5>
          </div>
          <div class="swiper-slide bg-white text-center overflow-hidden rounded">
            <img src="img/team.jpg" class="w-100">
            <h5 class="mt-2">Benny</h5>
          </div>
          <div class="swiper-slide bg-white text-center overflow-hidden rounded">
            <img src="img/team.jpg" class="w-100">
            <h5 class="mt-2">sumana</h5>
          </div>
          <div class="swiper-slide bg-white text-center overflow-hidden rounded">
            <img src="img/team.jpg" class="w-100">
            <h5 class="mt-2">kajal</h5>
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
      <script>
        var swiper = new Swiper(".mySwiper", {
          slidesPerView:3,
          spaceBetween:40,
          pagination: {
            el: ".swiper-pagination",
            dynamicBullets: true,
          },
          breakpoints:{
            320:{
              slidesPerView:1,
            },
            640:{
              slidesPerView:1,
            },
            768:{
              slidesPerView:2,
            },
            1024:{
              slidesPerView:3,
            },
          }
        });
      </script>
    <!-- footer -->
    <?php require('footer.php'); ?>

</body>
</html>
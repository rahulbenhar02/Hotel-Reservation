<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- links -->
     <?php require('links.php');?>
    <link rel="stylesheet" href="css/common.css">
    <title>HOTEL -Contact</title>
</head>
<body class="bg-light">
    <!-- header -->
    <?php require('header.php');?>
    <div class="my-5 px-4">
      <h2 class="fw-bold h-font text-center">CONTACT US</h2>
      <div class="h-line bg-dark"></div>
      <p class="text-center mt-3">
        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
         Nulla ratione libero <br> similique cumque! Cum in dignissimos 
         ullam eveniet tempore? Odit?
      </p>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 mb-5 px-4">
          <div class="bg-white rounded shadow p-4 ">
            <iframe class="w-100 rounded mb-4" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d61263.80511728251!2d80.39331875075592!3d16.32356660450231!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a4a755cb1787785%3A0x9f7999dd90f1e694!2sGuntur%2C%20Andhra%20Pradesh!5e0!3m2!1sen!2sin!4v1711821765028!5m2!1sen!2sin"   allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>  
            <h5>Address</h5> 
            <a href="https://maps.app.goo.gl/C9Z9g27T1AdPDNXT7" target="_blank" class="d-inline-block text-decoration-none text-dark mb-2">
            <i class="bi bi-geo-fill"></i> XYZ, lakshmipuram, guntur
            </a> 

            <h5 class="mt-4">Call Us</h5>
            <a href="tel:+917989884067" class="d-inline-block mb-2 text-decoration-none text-dark">
              <i class="bi bi-telephone-fill"></i> +917989884067
            </a><br>
            <a href="tel:+917989884067" class="d-inline-block text-decoration-none text-dark">
              <i class="bi bi-telephone-fill"></i> +917989884067
            </a> 

            <h5 class="mt-4">Email</h5>
            <a href="mailto:askme@gmail.com" class="d-inline-block text-decoration-none text-dark">
              <i class="bi bi-envelope-fill"></i> askme@gmail.com
            </a> 

            <h5 class="mt-4">Follow Us</h5>
            <a href="#" class="d-inline-block  text-dark fs-5 me-2">
              <i class="bi bi-twitter-x me-1"></i>
            </a>
            <a href="#" class="d-inline-block  text-dark fs-5 me-2">
              <i class="bi bi-instagram me-1"></i></i>
            </a>
            <a href="#" class="d-inline-block text-dark fs-5">
              <i class="bi bi-facebook me-1"></i>
            </a>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 px-4">
          <div class="bg-white rounded shadow p-4 ">
           <form>
            <h5>send us a message</h5>
            <div class="mt-3">
              <label  class="form-label" style="font-weight: 500;">Name</label>
              <input type="text" class="form-control shadow-none">
            </div>
            <div class="mt-3">
              <label  class="form-label" style="font-weight: 500;">Email</label>
              <input type="email" class="form-control shadow-none" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mt-3">
              <label  class="form-label" style="font-weight: 500;">Subject</label>
              <input type="text" class="form-control shadow-none">
            </div>
            <div class="mt-3">
              <label  class="form-label" style="font-weight: 500;">Message</label>
              <textarea class="form-control shadow-none" placeholder="Mention your message here" id="floatingTextarea2" rows= "5" style="height: 100px; resize:none"></textarea>
            </div>
            <div class="text-centre">
              <button  type="submit" class="btn text-white custom-bg mt-3">Send</button>
            </div>
           </form>
          </div>
        </div>
      </div>
    </div>

    <!-- footer -->
    <?php require('footer.php'); ?>

</body>
</html>
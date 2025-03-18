<div class="container-fluid bg-white mt-5">
    <div class="row">
      <div class="col-lg-4 p-4">
        <h3 class="h-font fw-bold fs-3 mb-2">Hotel</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Unde perspiciatis itaque similique repellendus voluptatem
          optio ipsum ea expedita aspernatur aperiam officiis hic placeat voluptates,
          magni dolor quae eum alias vel!</p>
      </div>
      <div class="col-lg-4 p-4">
        <h5 class="mb-3">Links</h5>
        <a href="index.php" class="d-inline-block mb-2 text-dark text-decoration-none">Home</a><br>
        <a href="rooms.php" class="d-inline-block mb-2 text-dark text-decoration-none">Rooms</a><br>
        <a href="facilities.php" class="d-inline-block mb-2 text-dark text-decoration-none">Facilities</a><br>
        <a href="contact.php" class="d-inline-block mb-2 text-dark text-decoration-none">Contact Us</a><br>
        <a href="about.php" class="d-inline-block mb-2 text-dark text-decoration-none">About Us</a><br>
      </div>
      <div class="col-lg-4 p-4">
        <h5 class="mb-3">Follow Us</h5>
        <a href="#" class="d-inline-block text-dark text-decoration-none mb-2">
          <i class="bi bi-twitter-x me-1"></i>Twitter
        </a><br>
        <a href="#" class="d-inline-block text-dark text-decoration-none mb-2">
          <i class="bi bi-facebook me-1"></i>Facebook
        </a><br>
        <a href="#" class="d-inline-block text-dark text-decoration-none">
          <i class="bi bi-instagram me-1"></i>Instagram
        </a>
      </div>
    </div>
</div>

  <h6 class="text-center bg-dark text-white p-3 m-0">Designed and Developed by Rahul</h6>
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script>
    let register_form = document.getElementById('register-form');
    register_form.addEventListener('submit',(e)=>
  {
    e.preventDefault();
    let data=new Formdata();
    data.append('firstname',register_form.elements['firstname'].value);
    data.append('lastname',register_form.elements['lastname'].value);
    data.append('email',register_form.elements['email'].value);
    data.append('phnnum',register_form.elements['phnnum'].value);
    data.append('profile',register_form.elements['profile'].files[0]);
    data.append('altphn',register_form.elements['altphn'].value);
    data.append('address',register_form.elements['address'].value);
    data.append('pincode',register_form.elements['pincode'].value);
    data.append('dob',register_form.elements['dob'].value);
    data.append('pass',register_form.elements['pass'].value);
    data.append('cpass',register_form.elements['cpass'].value);
    data.append('register','');

    var myModal = document.getElementById('registerModal');
    var modal = bootstrap.Modal.getInstance(myModal);
    modal.hide();
    let xhr = new XMLHttpRequest();
    xhr.open("POST","ajax/login_register.php",true);
    xhr.onload = function(){

    }
    xhr.send(data);
  }); -->

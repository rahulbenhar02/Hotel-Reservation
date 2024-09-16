<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<?php
include("links.php");

$con=mysqli_connect("localhost","root","","hotel");


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST['name'];
    $password = $_POST['pass'];

    if(!empty($name) && !empty($password)) {
        $query = "SELECT * FROM users WHERE firstname ='$name' LIMIT 1";
        $result = mysqli_query($con, $query);
        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                $user_data = mysqli_fetch_assoc($result);
                if ($user_data['pass'] == $password) {
                    header("Location: index.php");
                    die();
                } else {
                    echo "<script>alert('Wrong Password');</script>";
                    // header("Location: login.php");
                }
            } else {
                echo "<script>alert('User not found');</script>";
                // header("Location: login.php");
            }
        }
    }
}


?>
<button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2 MT-2" data-bs-toggle="modal" data-bs-target="#loginModal">
              LOGIN
</button>
<div class="col-lg-4 mt-3 shadow-none ">
    <form method="POST">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">name</label>
        <input name= "name" class="form-control shadow-none" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text ">We'll never share your email with anyone else.</div>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input name="pass" type="password" class="form-control shadow-none" id="exampleInputPassword1">
      </div>
      
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>



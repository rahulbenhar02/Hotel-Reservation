<?php
$con=mysqli_connect("localhost","root","","hotel");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST['email'];
    $password = $_POST['pass'];

    if(!empty($name) && !empty($password)) {
        $query = "SELECT * FROM users WHERE name ='$name' LIMIT 1";
        $result = mysqli_query($con, $query);
        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                $user_data = mysqli_fetch_assoc($result);
                if ($user_data['password'] == $password) {
                    header("Location: index.php");
                    die();
                } else {
                    echo "<script>alert('Wrong Password');</script>";
                    header("Location: login.php");
                }
            } else {
                echo "<script>alert('User not found');</script>";
                header("Location: login.php");
            }
        }
    }
}
?>

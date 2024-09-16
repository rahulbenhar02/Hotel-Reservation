<!-- <?php
    require('../admin/db_config.php');
    require('../admin/essentials.php');
    // if(isset($_POST['register']))
    // {
    //     $data = filteration($_POST);

    //     if($data['pass']!=$data['cpass']){
    //         echo 'pass_mismatch';
    //         exit;
    //     }
    //     $u_exist= select("SELECT * FROM `user_cred` WHERE `email`=? and `phnnum`=?",[$data['email']],[$data['phnnum']],"ss");

    //     if(mysqli_num_rows($u_exist)!=0){
    //         $u_exist_fetch=mysqli_fetch_assoc($u_exist);
    //         echo($u_exist_fetch['email'] == $data['email'])?'email_already' : 'phone_already';
    //         exit;
    //     }
    // }

    if(isset($_POST['submit'])){
        $firstname=$_POST['firstname'];
        $lastname=$_pPOST['lastname'];
        $email=$_POST['email'];
        $phno=$_POST['phnnum'];
        $password=$_POST['pass'];
        $cpassword=$_POST['cpass'];

        $conn=new mysqli('localhost','root','','hotel');

        if($conn->connect_error){
            die('Connection failed :'.$conn->connect_error);
        }
        else{
            $stmt=$conn->prepare("INSERT INTO users(`firstname`, `lastname`, `email`, `phnnum`, `pass`, `cpass`)
            VALUES(?,?,?,?,?,?)");
            $stmt->bind_param("ssssss",$firstname,$lastname,$email,$phno,$password,$cpassword);
            $stmt->execute();
            echo "Sign_up Succesfull...";
            $stmt->close();
            $conn->close();
        }
}
?> -->


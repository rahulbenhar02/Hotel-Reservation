<?php
 require('../db_config.php');
 require('../essentials.php');
 adminLogin();

 if (isset($_POST['get_general']))
 {
    $q="SELECT * FROM `settings` WHERE `sr_no`=?";
    $value=
 }
?>

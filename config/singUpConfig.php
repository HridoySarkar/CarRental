<?php
include 'partials/_dbconnect.php';
include 'partials/navbar.php';

if(isset($_POST['submit'])){
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $pass = md5($_POST['password']);
  $cpass = md5($_POST['cpassword']);
  $user_type = $_POST['user_type'];

  $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

  $result = mysqli_query($conn, $select);

  if(mysqli_num_rows($result) >0){
    $erorr[] = 'user already exist!';

  }else{
    if($pass != $cpass){
      $erorr[] = 'The password confirmation dose not match.';
    }
    else{
      $insert = "INSERT INTO user_form(name, email, password, user_type) VALUES('$name','$email', '$pass', '$user_type')";
      mysqli_query($conn, $insert);
      echo "<script> swal('Thanks for Signin up', 'Click Log in', 'success');</script>";
    }
  }

};




?>
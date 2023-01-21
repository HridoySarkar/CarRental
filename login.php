<?php
include 'partials/_dbconnect.php';
include 'partials/navbar.php';

session_start();

if(isset($_POST['submit'])){
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $pass = md5($_POST['password']);
  $cpass = md5($_POST['cpassword']);
  $user_type = $_POST['user_type'];

  $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

  $result = mysqli_query($conn, $select);

  if(mysqli_num_rows($result) >0){
    $row = mysqli_fetch_array($result);

    

      if($row['user_type']=='admin'){

        $_SESSION['admin_name'] = $row['name'];
        header('location:admin_page.php');

      }elseif($row['user_type'=='user']){
        $_SESSION['user'] = $row['name'];
        header('location:user_page.php');
      }

  }else{
    $error[] = 'incorrect email or password!';
  }


};


?>

<div class="container-lg">
    <div class="row">
    <div class="col-md-6 col-sm-1 mt-5">
    <img src="./img/login.png" alt="" width="90%">


    </div>




    <div class="col-md-4 col-sm-1 mt-5">
        <h2>Log in</h2>
       

    <form method="post" action="">
  <div class="mb-3">
    <label for="userEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="userEmail1" required aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="userPassword1"  class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="userPassword1" required>
  </div>
  <button type="submit" name="submit" value="login now" class="btn cta-btn">Log in</button>
  <p>don't have an account? <a href="./singup.php">Sing up</a></p>
  <?php
          if(isset($error)){
            foreach($error as $error){
              echo '<span class="invalid-feedback">'. $error .'</span>';
            }
          }
        ?>
</form>

    </div>





    </div>
</div>











<?php
include 'partials/footer.php';
?>
<?php
include 'config/singUpConfig.php'

?>

<div class="container-lg">
    <div class="row">
    <div class="col-md-6 col-sm-1 mt-5">
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<lottie-player src="https://assets4.lottiefiles.com/packages/lf20_yqyt4zdn.json"  background="transparent"  speed="0.5"  style="width: 500px; height: 500px;"  loop autoplay></lottie-player>


    </div>




    <div class="col-md-4 col-sm-1 mt-5">
        <h2>Registration</h2>

        <?php
          if(isset($error)){
            foreach($error as $error){
              echo '<span class="invalid-feedback">'.$error.'</span>';
            }
          }

        ?>

    <form method="post" action="">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" name="name">Enter your name</label>
    <input type="name" name="name" require class="form-control" id="name">
    

    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Confirm password</label>
    <input type="password" name="cpassword" class="form-control" id="exampleInputPassword1">
  </div>
  <select name="user_type" class="d-none">
  <option selected value="user"></option>
  </select>


  <button type="submit" name="submit" value="register now" class="btn cta-btn">Sing up</button>
  <p class="mt-2">already have an account? <a href="./login.php">Log in</a></p>
</form>

    </div>





    </div>
</div>





<?php
include 'partials/footer.php';
?>
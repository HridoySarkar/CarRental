<?php
include 'partials/_dbconnect.php';
include 'partials/navbar.php';

?>




<div class="container-lg">
  <div class="row">
    <div class="col-lg-6 my-5"><img src="./img/herobanner.svg" class="img-fluid" alt="hero banner"></div>
    <div class="col-lg-6 my-5">
        <div class="row">
            <h2 class="display-2 fw-bold text-end">Rental Rush</h2>
            <p class='text-end'>Pay less, drive more</p>
        </div>
        <div class="custom_hero_btn">
        <a href='./login.php'><button type='button' class='btn cta-btn btn-md'>Rent Now</button></a>
        
        </div>
        
        
        
    </div>
  </div>
</div>

<?php
include 'partials/footer.php';
?>
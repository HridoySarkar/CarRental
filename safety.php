<?php
if(isset($_SESSION['admin'])){
include 'config/adminPageConfig.php';
include 'partials/adminNav.php';
}elseif(isset($_SESSION['user'])){
include 'config/userPageConfig.php';
include 'partials/userNav.php';
}else{
    include 'partials/_dbconnect.php';
    include 'partials/navbar.php';
}
?>
<style>
    #safe-table{
    display: none;
}
</style>

<div class="container">
    
    <div class="row m-3 pb-3">
        <div class="col-lg-6 p-4">
            <img src="./img/safety.png" class="img-fluid" alt="" srcset="">
        </div>
        
        <div class="col-lg-6 p-4">
            <h1 class="display-5 fw-700">Our commitment to safety</h1>
            <p>We want you to move freely, make the most of your time, and be connected to the people and places that matter most to you. That’s why we are committed to safety, from the creation of new standards to the development of technology with the aim of reducing incidents.</p>
            <p>Click the "<span class="text-bold">Show Now</span>" to see all Emergency numbers and all area's Police Station.</p>
            <button class="btn cta-btn" id="my-btn">Show Now</button>
        </div>
            <div class="safety" id="safe-table">
        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Thana</th>
      <th scope="col">Number</th>
      <th scope="col">Area & Location</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Banani</td>
      <td>0170000001</td>
      <td>Banani</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</div>

    </div>
    <div class="row pt-3">
        <h2 class="display-5">Building safer journeys for everyone</h2>
        <div class="col-md-6 p-4">
            <img src="./img/driver.png" class="img-fluid" alt="" srcset="">

            <h3>Driver safety</h3>
            <p>Count on 24/7 support to help with any questions or safety concerns. Share your trip with loved ones. Our focus is on your safety, so you can go where the opportunity is.</p>
        </div>
        <div class="col-md-6 p-4">
            <img src="./img/customer.png" class="img-fluid" alt="" srcset="">

            <h3>Rider safety</h3>
            <p>Millions of rides are requested every day. Every rider has access to safety features built into the app. And every ride has a support team if you need them.</p>
        </div>


        



    </div>
</div>

<script src="./scripts/safeConfig.js"></script>




<?php
include 'partials/footer.php';
?>
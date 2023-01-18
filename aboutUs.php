<?php
session_start();
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
    .custom-banner{
    background-image: url(./img/heroabout.png);
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
    position: absolute;
    min-width: 100%;
    height: auto;
    overflow: hidden !important;
    min-height: 100%;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -0%) scaleX(1);
    z-index: -1;
}

</style>

<main>
<div class="position-relative overflow-hidden p-3 p-md-5 text-center bg-light custom-banner">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <h1 class="display-4 fw-normal text-light">About us</h1>
    </div>
  </div>
</main>


<div class="container">
    <div class="row m-5">
        <div class="col-lg-8">
        <h2>We reimagine the way the world moves for the better</h2>
        <p>Movement is what we power. It’s our lifeblood. It runs through our veins. It’s what gets us out of bed each morning. It pushes us to constantly reimagine how we can move better. For you. For all the places you want to go. For all the things you want to get. For all the ways you want to earn. Across the entire world. In real time. At the incredible speed of now.</p>
        </div>
    </div>
</div>












<?php
include 'partials/footer.php';
?>
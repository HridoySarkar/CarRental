<?php
include 'partials/_dbconnect.php';
include 'partials/navbar.php';

session_start();
session_unset();
session_destroy();

    echo "<script> swal({
        icon: 'success',
        title: 'Log out successful',
        showConfirmButton: false,
      })</script>";

?>

<body>
    


<div class="container">
    <div class="row">
        <div class="col-md-6 mt-5">
            <img src="./img/logout.png" alt="" class="img-fluid">
        </div>
        <div class="col-md-6 mt-5">
            <h2 class="display-5">Thanks for using our service</h2>
            <hr>
            <h4>Get in the driver’s seat and get paid</h4>
            <p>Whether you’re in the back seat or behind the wheel, your safety is essential. We are committed to doing our part, and technology is at the heart of our approach.</p>
        <a href='./login.php'><button type='button' class='btn cta-btn btn-md'>Rent Now</button></a>
        </div>
    </div>
</div>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>








<?php
include 'partials/footer.php';
?>
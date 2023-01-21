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
    .list-group-item{
    border: none !important;
    }
</style>
<body>
    <div class="container">
    <div class="col-lg mt-5">
                <h2 class="display-5 text-center">How can we help you?</h2>
                <img src="./img/support.png" alt="" class="img-fluid d-block m-auto">
            </div>
        <div class="row mt-3">
            <div class="col-lg-4">
                <ul class="list-group shadow-sm p-3 mb-5 bg-body rounded">
                    <li class="list-group-item"><a href=""></a>System info</li>
                    <li class="list-group-item"><a href=""></a>About us</li>
                    <li class="list-group-item"><a href=""></a>Contact</li>
                </ul>
            </div>
            <div class="col-lg-4">
            <ul class="list-group shadow-sm p-3 mb-5 bg-body rounded">
                    <li class="list-group-item"><a href=""></a>System info</li>
                    <li class="list-group-item"><a href=""></a>About us</li>
                    <li class="list-group-item"><a href=""></a>Contact</li>
                </ul>
            </div>
            <div class="col-lg-4">
            <ul class="list-group shadow-sm p-3 mb-5 bg-body rounded">
                    <li class="list-group-item"><a href=""></a>System info</li>
                    <li class="list-group-item"><a href=""></a>About us</li>
                    <li class="list-group-item"><a href=""></a>Contact</li>
                </ul>
            </div>
        </div>
    </div>




        <script>
            document.title ="Help - Rental Rush";

        </script>

</body>


<?php
include 'partials/footer.php';
?>
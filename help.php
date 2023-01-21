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








<?php
include 'partials/footer.php';
?>
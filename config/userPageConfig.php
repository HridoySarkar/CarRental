<?php
include 'partials/_dbconnect.php';
?>


<?php
include 'partials/_dbconnect.php';

session_start();

if(isset($_SESSION['user_name'])){
    header('location:login.php');
}

?>
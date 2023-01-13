<?php
include 'partials/_dbconnect.php';

session_start();

if(!isset($_SESSION['admin_name'])){
     header('location:login.php');
}

?>
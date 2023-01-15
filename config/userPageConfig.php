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


<?php 
$servername="localhost";
$username="root";
$password="";
$insert = false;

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
  die("Sorry we failed to connect:". mysqli_connect_error());
}


if($_SERVER['REQUEST_METHOD'] == "POST"){
  $title =mysqli_real_escape_string($conn,$_POST["f_from"]);
  $description =mysqli_real_escape_string($conn, $_POST["d_to"]);
  $sql = "INSERT INTO `note` (`f_from`, `d_to`) VALUES ('$title','$description')";
  $resultNote = mysqli_query($conn, $sql);


if($resultNote){
  $insert = true;
  echo "<script>swal('Hello world!');</script>";
}
else{
  echo "The record was not inserted successfully because of this error -->" . mysqli_error($conn);
}
}


?>
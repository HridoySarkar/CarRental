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
$database="notes";
$insert = false;

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
  die("Sorry we failed to connect:". mysqli_connect_error());
}


if($_SERVER['REQUEST_METHOD'] == "POST"){
  $title = $_POST["title"];
  $description = $_POST["description"];
  $sql = "INSERT INTO `notes` (`title`, `description`) VALUES ('$title','$description')";
  $result = mysqli_query($conn, $sql);


if($result){
  $insert = true;
}
else{
  echo "The record was not inserted successfully because of this error -->" . mysqli_error($conn);
}
}


?>
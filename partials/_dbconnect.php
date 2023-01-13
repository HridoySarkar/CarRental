<?php
$_server="localhost";
$username="root";
$password="";
$database="user_db";

$conn =mysqli_connect($_server,$username,$password,$database);

if($conn){
}
else{
    die("Error". mysqli_connect_error());
}

?>
<?php 
  
  $host="localhost";
  $user="root";
  $password="";
  $db_name="ecomm";

  $conn=mysqli_connect($host,$user,$password,$db_name);

if(!$conn){

echo("Failed to connect database");

}


?>
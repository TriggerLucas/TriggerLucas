<?php

$host="localhost";
$user="root";
$db="myproj";
$conn=new mysqli($host,$user,$db);
if($conn->connect_error){
  echo "failed to connect DB".$conn->connect_error;
}

?>
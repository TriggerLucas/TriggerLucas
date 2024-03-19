<?php

include 'log.php';

if(isset($_POST['enter your name'])){
  $Name=$_POST['1name'];
  $Province=$_POST['province'];
  $DOB=$_POST['dob'];
  $Gender=$_POST['gender'];
  $NRC=$_POST['nrc'];
  $Political=$_POST['political'];

  $checkName="SELECT * FROM users where 1name='$Name'"
  $result=$conn->query($checkName);
  if($result->num_rows>0){
    echo"Name already exists!"
  }
  else{
    $insertQuery="INSERT INTO users(Name,Province,DOB,Gender,nrc,Political)
    VALUE ('$Name','$Province','$DOB','$Gender','$NRC','$Political')"
    if($conn->query($insertQuery)==TRUE){
      header("location: index.php");
    }
    else{
      echo "error:".$conn->error;
    }
  }
}

if(isset($_POST['name'])){
  $Province=$_POST['province'];
  $DOB=$_POST['dob'];
  $Gender=$_POST['gender'];
  $NRC=$_POST['nrc'];
  $Political=$_POST['political'];
0
  $sql="SELECT * FROM users WHERE province='$Province' and dob='$DOB' and gender=$Gender
  and nrc=$NRC and political=$Political";
  $result=$conn->query($sql);
  if($result->num_rows>0){
    session_start();
    $row=$result->fetch_assoc();
    $_SESSION['nrc']=$row['nrc'];
    header("location homepage.php");
    exit();
  }
  else{
    echo "Name not valid or has been used.";
  }

  }
?>
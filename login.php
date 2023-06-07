<?php
include("connexion.inc.php");
session_start();
$email=$_POST['email'];
$password=$_POST['password'];
$req="select * from user where email='$email' and password='$password'";
$res=mysqli_query($conn,$req);
if (mysqli_num_rows($res)==0)
 {
    echo"error in password or email";
 }
 else
  {
    $row = mysqli_fetch_row($res);
    $_SESSION["sid"]=$row[0];
    $_SESSION["snom"]=$row[1];
    $_SESSION["sprenom"]=$row[2];
    $_SESSION["semail"]=$row[3];
    $_SESSION["spassword"]=$row[4];
    $_SESSION["sdate"]=$row[5];
    header('location:profile.php');
    



  }


?>
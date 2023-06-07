<?php
session_start();
$email=$_SESSION['semail'];
    include("connexion.inc.php");
    $req="UPDATE user SET nom='".$_POST["nom"]."', prenom='".$_POST["prenom"]."', email='".$_POST["email"]."', password='".$_POST["password"]."', genre='".$_POST["genre"]."', numero='".$_POST["numero"]."', date='".$_POST["date"]."' where email='$email'";
    $res=mysqli_query($conn,$req); 
    if ($res) {
        header("location:modifuser.php");
    } 
    else echo "echec"; 
?>
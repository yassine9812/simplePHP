<?php
include("connexion.inc.php");
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['Email'];
$password = $_POST['password'];
$gender = $_POST['radio'];
$numero = $_POST['numero'];
$date = $_POST['date'];

$req = "select email from user where email='$email'";
$res = mysqli_query($conn, $req);
if (mysqli_num_rows($res) > 0) {
    echo "mail already in use";
} else {
    $req1 = "INSERT INTO user (nom,prenom,email,password,genre,numero,date,profile) VALUES ('$nom', '$prenom','$email','$password','$gender','$numero','$date','participant')";
    $res1 = mysqli_query($conn, $req1);
    if ($res1) {
        $req2 = "select * from user where email='$email'";
        $res2 = mysqli_query($conn, $req2);
        if (mysqli_num_rows($res2) > 0) {
            $followingdata = mysqli_fetch_assoc($res2);
            echo $followingdata;
            var_dump($followingdata);
            $user_id = $followingdata["ID_user"];
            $req3 = "INSERT INTO participant (ID_user) VALUES ('$user_id')";
            $res3 = mysqli_query($conn, $req3);
            if ($res3) {
                header('location:Login.html');
            } else {
                echo 'echec';
            }
        } else {
            echo "cannot find user";
        }
    } else {
        echo "Echec";
    }
}
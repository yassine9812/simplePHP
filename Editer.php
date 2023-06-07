<?php
include("connexion.inc.php");
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['Email'];
$password = $_POST['password'];
$gender = $_POST['radio'];
$numero = $_POST['numero'];
$date = $_POST['date'];
if (count($_POST) > 0) {
    $req = "update user set nom='$nom',prenom='$prenom',email='$email',password='$password',gender='$gender'numero='$numero',date='$date'";
    $message = "Record Modified Successfully";
}
$result = mysqli_query($conn, "SELECT * FROM user WHERE email='" . $_GET['Email'] . "'");
$row = mysqli_fetch_array($result);
?>
<html>

<head>
    <title>Update</title>
</head>

<body>
    <form name="frmUser" method="post" action="">
        <div>
            <?php if (isset($message)) {
                echo $message;
            } ?>
        </div>
        <div>
        </div>
        Nom: <br>
        <input type="hidden" name="nom" value="<?php echo $row['nom']; ?>">
        <input type="text" name="nom" value="<?php echo $row['nom']; ?>">
        <br>
        Prenom <br>
        <input type="text" name="prenom" value="<?php echo $row['prenom']; ?>">
        <br>
        Email :<br>
        <input type="email" name="email" value="<?php echo $row['email']; ?>">
        <br>
        Password:<br>
        <input type="password" name="password" value="<?php echo $row['password']; ?>">
        <br>
        Date:<br>
        <input type="date" name="date" value="<?php echo $row['date']; ?>">
        <br>
        <input type="submit" value="Enregistrer" class="buttom">

    </form>
</body>

</html>
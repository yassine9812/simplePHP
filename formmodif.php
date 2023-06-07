<?php
include("connexion.inc.php");
session_start();
$email = $_SESSION['semail'];
$req = "select nom,prenom,email,password,genre,numero,date from user where email='$email'";
$res = mysqli_query($conn, $req);
$row = mysqli_fetch_array($res);
?>
<div class="input-group mb-3">
    <form action="traitmodif.php" method="post">

        <p>Nom : <input class="form-control" type="text" name="nom" value="<?php echo $row[0]; ?>"></p>
        <p>Prenom : <input class="form-control" type="text" name="prenom" value="<?php echo $row[1]; ?>" /></p>
        <p>email : <input class="form-control" type="text" name="email" value="<?php echo $row[2]; ?>" /></p>
        <p>password : <input class="form-control" type="text" name="password" value="<?php echo $row[3]; ?>" /></p>
        <p>genre : <input type="radio" name="genre" value="<?php echo $row[4]; ?>" /></p>
        <p>numero : <input class="form-control" type="text" name="numero" value="<?php echo $row[5]; ?>" /></p>
        <p>date : <input class="form-control" type="date" name="date" value="<?php echo $row[6]; ?>" /></p>
        <p><input class="btn btn-primary" type=submit value=Modifier>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
                crossorigin="anonymous"></script>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
                crossorigin="anonymous">


    </form>
</div>
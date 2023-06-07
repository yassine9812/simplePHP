<?php
include("connexion.inc.php");
$req = "select * from user ";
$res = mysqli_query($conn, $req);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fetch data from data base</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>

    <form action="Editer.php" method="post">
        <div class="container border-dark mt-5">
            <h2>
                <p class="text-danger text-center">Admin</p>
            </h2>
        </div>

        <table class="table table-bordered text-center">
            <tr class="bg-dark text-white">
                <td>user id</td>
                <td>Nom</td>
                <td>Prenom</td>
                <td>Email</td>
                <td>Password</td>
                <td>Date</td>
                <td>Edit</td>
                <td>Delete</td>
            </tr>
            <tr>
                <?php
                while ($row = mysqli_fetch_assoc($res)) {
                    ?>
                    <td>
                        <?php echo $row['ID_user'] ?>
                    </td>
                    <td>
                        <?php echo $row['nom'] ?>
                    </td>
                    <td>
                        <?php echo $row['prenom'] ?>
                    </td>
                    <td>
                        <?php echo $row['email'] ?>
                    </td>
                    <td>
                        <?php echo $row['password'] ?>
                    </td>
                    <td>
                        <?php echo $row['date'] ?>
                    </td>
                    <td><input type="submit" value="Edit" class="btn btn-success"></td>
                    <td><a href="#" class="btn btn-danger">Suprimer</td>
                </tr>
                <?php
                }
                ?>
            </tr>
        </table>


    </form>
</body>

</html>
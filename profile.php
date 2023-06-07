<?php
session_start();
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

    <div class="container border-dark mt-5">
        <h2>
            <p class="text-danger text-center">Profile</p>
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
        </tr>
        <tr>
            <td>
                <?php echo $_SESSION["sid"] ?>
            </td>
            <td>
                <?php echo $_SESSION["snom"] ?>
            </td>
            <td>
                <?php echo $_SESSION["sprenom"] ?>
            </td>
            <td>
                <?php echo $_SESSION["semail"] ?>
            </td>
            <td>
                <?php echo $_SESSION["spassword"] ?>
            </td>
            <td>
                <?php echo $_SESSION["sdate"] ?>
            </td>
            <td><a href='formmodif.php?id='>Modifier</a></td>

        </tr>
    </table>



</body>

</html>
<?php
    include("connexion.inc.php");
    session_start();
    $email=$_SESSION['semail'];
    $req="select * from user"; 
    $res=mysqli_query($conn,$req); 
    echo "<table class='table table-sm'><tr><td>ID</td>Nom</td>Prenom</td><td>email<td>password<td>genre<td><td>numero<td>date<td>Prenom<td></tr>"; 
    while( ($row=mysqli_fetch_array($res)) != null) {
       echo "<tr><td>".$row[0]."<td>".$row[1]."<td>".$row[2]."<td>".$row[3]."<td>".$row[4]."<td>".$row[5]."<td>".$row[6]."<td>".$row[7]."<td><a class='nav-link' href='formmodif.php?id=".$row[0]."'>Modifier</a></tr>"; } 
    echo "</table>";

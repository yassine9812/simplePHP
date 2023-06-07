<?php
define("SERVEUR","localhost");
define("USER","root");
define("MDP","");
define("NOMBASE","marathon");
$conn=mysqli_connect(SERVEUR,USER,MDP,NOMBASE);
if (!$conn)
{
    echo "echec de la connexion";
}
?>
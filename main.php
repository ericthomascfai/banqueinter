<?php
require("Compte.php");
require("Client.php");

$compte=new Compte(1);
if(isset($_POST["depot"]))
{
    $compte->depot($_POST["depot"]);
}




?>

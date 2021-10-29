<?php
require("Compte.php");
$compte=new Compte(1);
$compte->depot(100);
$compte->retrait(50);
$compte->afficherSolde();
?>

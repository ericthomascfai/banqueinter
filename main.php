<?php
require("Compte.php");
$compte=new Compte(1);
$compte2=new Compte(2);
$compte->depot(100);
$compte->retrait(50);
$compte->afficherSolde();
$compte->virer(50,$compte2);
$compte->afficherSolde();
$compte2->afficherSolde();
?>

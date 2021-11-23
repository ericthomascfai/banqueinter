<?php
require("Compte.php");
require("Client.php");
$compte=new Compte(1);

if(isset($_POST["depot"]))
{
    $compte->depot($_POST["depot"]);
    echo "<script>alert('Dépot effectué'); document.location='menucompte.html';</script>";
}
else
    if(isset($_POST["retrait"]))
    {
        $compte->retrait($_POST["retrait"]);
        echo "<script>alert('Retrait effectué'); document.location='menucompte.html';</script>";
    }
    else
        if(isset($_POST["destinataire"])&&isset($_POST["montantvirement"]))
        {
            $compte->virer($_POST["montantvirement"],$_POST["destinataire"]);
            echo "<script>alert('Virement effectué'); document.location='menucompte.html';</script>";
        }
        else
        {
            $compte->afficherSolde();
        }




?>

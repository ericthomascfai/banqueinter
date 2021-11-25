<?php
require("Compte.php");
require("Client.php");
require("AccessBDD.php");
$access=new AccessBDD();
if(isset($_POST["id"])&&isset($_POST["solde"]))
{
    $compte=new Compte($_POST["id"],$_POST["solde"]);
    $access->insert($compte);
    echo "<script>document.location='menucompte.html';</script>";
}

if(isset($_POST["depot"]))
{
    $compte=$access->find($_POST["id"]);
    $compte->depot($_POST["depot"]);
    $access->update($compte);
    echo "<script> document.location='menucompte.html';</script>";
}
else
    if(isset($_POST["retrait"]))
    {
        $compte=$access->find($_POST["id"]);
        $compte->retrait($_POST["retrait"]);
        $access->update($compte);
        echo "<script>document.location='menucompte.html';</script>";
    }
    else
        if(isset($_POST["destinataire"])&&isset($_POST["montantvirement"]))
        {
            $comptesource=$access->find($_POST["id"]);
            $destinataire=$access->find($_POST["destinataire"]);
            $comptesource->virer($_POST["montantvirement"],$destinataire);
            $access->update($comptesource);
            $access->update($destinataire);
            echo "<script> document.location='menucompte.html';</script>";
        }
        else
        {
            $compte->afficherSolde();
        }




?>

<?php



class Client
{
    private $lescomptes;
    private $nom;

    public function __construct($nom)
    {
        $this->nom=(string)$nom;
        $this->lescomptes =new \Ds\Vector();
    }


    public function ajouterCompte($compte)
    {
        $this->lescomptes->push($compte);
    }

    public function getSolde()
    {
        $somme=0;
        foreach ($this->lescomptes as $compte)
        {
            $somme+=$compte->getSolde();
        }
        return $somme;
    }

    public function afficherSolde()
    {
        echo "Le solde de tous les comptes du client ".$this->nom." est de ".$this->getSolde()." euros<br>";

    }



}
?>
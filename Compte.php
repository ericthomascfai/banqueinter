<?php

class Compte
{
    private $numero;
    private $solde;

    public function __construct($numero)
    {
        $this->numero=(int)$numero;
        $solde=0;
    }

    public function depot($montant)
    {
        $this->solde+=$montant;
    }

    public function retrait($montant)
    {
        $this->solde-=$montant;
    }

    /**
     * @return mixed
     */
    public function getSolde()
    {
        return $this->solde;
    }

    public function afficherSolde()
    {
        echo "Le solde du compte n°".$this->numero." est de ".$this->solde." euros<br>";
    }

}

?>
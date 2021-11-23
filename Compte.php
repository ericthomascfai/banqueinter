<?php

class Compte
{
    private $id;
    private $solde;

    public function __construct($id)
    {
        $this->numero=(int)$id;
        $solde=0;
    }

    public function depot($montant)
    {
        $this->solde+=(float)$montant;
    }

    public function retrait($montant)
    {
        $this->solde-=(float)$montant;
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
        echo "Le solde du compte n°".$this->numero." est de ".number_format($this->solde,2)." euros<br>";
    }

    public function virer($montant,$destinataire)
    {
        $this->retrait($montant);
        $destinataire->depot($montant);
    }

}

?>
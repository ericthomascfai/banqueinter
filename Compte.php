<?php

class Compte
{
    private $id;
    private $solde;

    public function __construct($id,$solde)
    {
        $this->id=(int)$id;
        $this->solde=$solde;
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

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    public function afficherSolde()
    {
        return "Le solde du compte n°".$this->id." est de ".number_format($this->solde,2)." euros";
    }

    public function virer($montant,$destinataire)
    {
        $this->retrait($montant);
        $destinataire->depot($montant);
    }

}

?>
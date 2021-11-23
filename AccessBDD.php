<?php

class AccessBDD
{
    private $connexion;

    public function __construct()
    {
        $dsn="mysql:dbname="."banque".";host="."localhost:3306" ;
        try{
        $this->connexion=new PDO($dsn,"root","tignes");
        echo "Connexion OK";
    }
        catch(PDOException $e){
            echo ("Échec de la connexion : %s\n".$e->getMessage());
            exit();
        }

    }


}
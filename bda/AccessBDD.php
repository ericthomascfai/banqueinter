<?php

class AccessBDD
{
    private $connexion;

    public function __construct()
    {
        $dsn="mysql:dbname="."banque".";host="."localhost:3306" ;
        try{
        $this->connexion=new PDO($dsn,"root","tignes");

    }
        catch(PDOException $e){
            echo ("Échec de la connexion : %s\n".$e->getMessage());
            exit();
        }

    }


    public function insert($compte)
    {

        $sql="INSERT INTO compte VALUES (:id,:solde)";
        $stmt=$this->connexion->prepare($sql);
        $stmt->bindParam(':id',$compte->getId());
        $stmt->bindParam(':solde',$compte->getSolde());
        $stmt->execute(); //execute la requete

        if(!$stmt)
        {
            echo "<script>alert('Pb connexion');</script>";
        }
        else
            if($stmt->rowCount()==1)
            {
                echo "<script>alert('Le compte n° ".$compte->getId()." a bien été créé');</script>";
            }
    }

    public function update($compte)
    {
        $sql="UPDATE compte SET solde=:newsolde where id=:id";
        $stmt=$this->connexion->prepare($sql);
        $stmt->bindParam(':id',$compte->getId());
        $stmt->bindParam(':newsolde',$compte->getSolde());
        $stmt->execute(); //execute la requete
        if(!$stmt)
        {
            echo "<script>alert('Pb connexion');</script>";
        }
        else
            if($stmt->rowCount()==1)
            {
                echo "<script>alert('Le compte a bien été modifié');</script>";
            }

    }

    public function find($id)
    {
        $sql="SELECT * FROM compte where id=:id";
        $stmt=$this->connexion->prepare($sql);
        $stmt->bindParam(':id',$id);
        $stmt->execute();
        $row=$stmt->fetch();
        if(empty($row))
        {
            echo "<script>alert('pas de résultats');</script>";
        }
        else
        return new Compte($row["id"],$row["solde"]);
    }



}
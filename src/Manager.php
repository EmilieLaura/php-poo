<?php

// Ici toutes les requêtes CRUD

class Manager {
    // table de la base de données
    protected $table;

    // instance de db
    private $bdd;

    public function __construct(PDO $bdd)
    {
        $this->setBdd($bdd);
    }

    public function setBdd(PDO $bdd)
    {
        $this->bdd = $bdd;

    }

    public function ajouterPerso()
    {
        if( isset($_POST['pseudo']) && isset($_POST['personnage'])) {
            $pseudo = trim($_POST['pseudo']);
            $personnage = trim($_POST['personnage']);

            $enregistrement = $this->bdd->prepare("INSERT INTO (pseudo, personnage) VALUES (:pseudo, :personnage)");
            $enregistrement->bindParam(':pseudo', $pseudo, PDO::PARAM_STR);
            $enregistrement->bindParam(':personnage', $personnage, PDO::PARAM_STR);
            $enregistrement->execute();
        }
    }

    public function supprimerPerso()
    {
        if( isset($_GET['action']) && $_GET['action'] == 'suppression') {
            $delete = $this->bdd->prepare("DELETE FROM member WHERE id = :id");
            $delete->bindParam(':id', $_GET['id'], PDO::PARAM_STR);
            $delete->execute();
        }
    }

    public function modifierPerso()
    {
        if( isset($_GET['action']) && $_GET['action'] == 'modification') {
            $modifie = $this->bdd->prepare("UPDATE to member WHERE id = :id");
            $modifie->bindParam(':id', $_GET['id'], PDO::PARAM_STR);
            $modifie->execute();
        }
    }
}
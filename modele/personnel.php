<?php
require_once "connexionDB.php";

function getAllPersonnels(): array|string
{
    $personnels = requeteSQL("SELECT * FROM chapristi.personnels");
    if (!empty($personnels)) {
        return $personnels;
    } else {
        return "Tableau vide";
    }
}
function getPersonnelById($id)
{
        $requete = getConnexion()->prepare("Select * from chapristi.personnels where personnels.id_personnel = :id");
        $requete->bindValue(":id", $id);
        $requete->execute();
        return $requete->fetchAll(2);
}
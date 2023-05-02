<?php
require_once "connexionDB.php";
function getAllProduits(): array|string
{
    $produits = requeteSQL("SELECT * FROM chapristi.produits");
    if (!empty($produits)) {
        return $produits;
    } else {
        return "Tableau vide";
    }
}

function getProduitById($id): array|string
{
    $requete = getConnexion()->prepare("Select * from chapristi.produits where chapristi.produits.id_produit = :id");
    $requete->bindValue(":id", $id);
    $requete->execute();
    return $requete->fetchAll(2);
}

function getFiveFirstProduits(): array|string
{
    $produits = requeteSQL("SELECT * FROM chapristi.produits limit 5");
    if (!empty($produits)) {
        return $produits;
    } else {
        return "Tableau vide";
    }
}
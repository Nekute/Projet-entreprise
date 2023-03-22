<?php
require_once "connexionDB.php";
function getAllPanier(): array|string
{
    $produits = requeteSQL("SELECT * FROM chapristi.panier");
    if (!empty($produits)) {
        return $produits;
    } else {
        return "Tableau vide";
    }
}

function getPanierProduitById($idUser, $idProduit)
{
    $requete = getConnexion()->prepare("Select * from chapristi.panier where id_utilisateur = :idUser and id_produit = :idProduit");
    $requete->bindValue(":idUser", $idUser);
    $requete->bindValue(":idProduit", $idProduit);
    $requete->execute();
    if (!empty($requete)) {
        return $requete->fetchAll(2);
    } else {
        return "Tableau vide";
    }
}

function getPanierProduitByIdUser($id): array|string
{
    $requete = getConnexion()->prepare("Select * from chapristi.panier where id_utilisateur = :id");
    $requete->bindValue(":id", $id);
    $requete->execute();
    if (!empty($requete)) {
        return $requete->fetchAll(2);
    } else {
        return "Tableau vide";
    }
}

function getPanierProduitByIdProduit($id): array|string
{
    $requete = getConnexion()->prepare("Select * from chapristi.panier where id_produit = :id");
    $requete->bindValue(":id", $id);
    $requete->execute();
    if (!empty($requete)) {
        return $requete->fetchAll(2);
    } else {
        return "Tableau vide";
    }
}


function ajouterPanierProduit($idUser, $idProduit): bool
{
    $connexion = getConnexion();
    $requeteSQL = "Insert into chapristi.panier(id_utilisateur, id_produit,quantité_panier)
values(:id_user,:id_produit,1)";
    $requete = $connexion->prepare($requeteSQL);
    $requete->bindValue(":id_user", $idUser);
    $requete->bindValue(":id_produit", $idProduit);
    return $requete->execute();
}

function getAllPanierProduitsByIdUser($idUser)
{
    $requete = getConnexion()->prepare("Select * from chapristi.panier inner join chapristi.produits on chapristi.panier.id_produit = chapristi.produits.id_produit where id_utilisateur = :id_user");
    $requete->bindValue(":id_user", $idUser);
    $requete->execute();
    return $requete->fetchAll(2);
}

function modifierQuantitePanier($idUser, $idProduit, $quantite)
{
    if ($quantite <= 0) {
        $requete = getConnexion()->prepare("Delete from chapristi.panier where id_utilisateur = :idUser and id_produit = :idProduit");
    } else {
        $requete = getConnexion()->prepare("Update chapristi.panier set quantité_panier = :quantite where id_utilisateur = :idUser and id_produit = :idProduit");
        $requete->bindValue(":quantite", $quantite);
    }
    $requete->bindValue(":idUser", $idUser);
    $requete->bindValue(":idProduit", $idProduit);
    $requete->execute();
}

function DeleteAllPanierByIdUser($idUser)
{
    $requete = getConnexion()->prepare("Delete from chapristi.panier where id_utilisateur = :idUser");
    $requete->bindValue(":idUser", $idUser);
    $requete->execute();
}
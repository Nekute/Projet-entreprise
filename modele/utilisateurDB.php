<?php
require_once "connexionDB.php";
function addUser(string $pseudo, string $email, string $mdp, $role)
{
    $connexion = getConnexion();
    $requeteSQL = "INSERT INTO chapristi.utilisateur 
VALUES (NULL, :pseudo,:email,:mdp,:role);";
    $requete = $connexion->prepare($requeteSQL);
    $requete->bindValue(":pseudo", $pseudo);
    $requete->bindValue(":email", $email);
    $requete->bindValue(":mdp", $mdp);
    $requete->bindValue(":role", $role);
    return $requete->execute();
}

function checkUserByUsername($username)
{
    $requete = getConnexion()->prepare("select * from chapristi.utilisateur where pseudo_utilisateur = :username");
    $requete->bindValue(":username", $username);
    $requete->execute();
    if (empty($requete->fetchAll(2))) {
        return false;
    }
    return true;
}

function checkConnexionUser($username, $mdp)
{
    $requete = getConnexion()->prepare("select * from chapristi.utilisateur where pseudo_utilisateur = :username and mdp_utilisateur = :mdp");
    $requete->bindValue(":username", $username);
    $requete->bindValue(":mdp", password_hash($mdp, PASSWORD_DEFAULT));
    if (empty($requete->fetchAll(2))) {
        return false;
    }
    return true;
}

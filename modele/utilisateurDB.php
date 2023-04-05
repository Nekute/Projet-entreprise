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

function getIdUserByUsername($username)
{
    $requete = getConnexion()->prepare("select id_utilisateur from chapristi.utilisateur where pseudo_utilisateur = :username");
    $requete->bindValue(":username", $username);
    $requete->execute();
    return $requete->fetchAll(2);
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
    $requete = getConnexion()->prepare("select * from chapristi.utilisateur where pseudo_utilisateur = :username");
    $requete->bindValue(":username", $username);
    $requete->execute();
    $profil = $requete->fetchAll(2);
    if (password_verify($mdp, $profil[0]["mdp_utilisateur"])) {
        return true;
    }
    return false;
}

function getUserById($id)
{
    $requete = getConnexion()->prepare("select * from chapristi.utilisateur where id_utilisateur = :id");
    $requete->bindValue(":id", $id);
    $requete->execute();
    return $requete->fetchAll(2);

}

function modifierPseudo($id, $pseudo): bool
{
    $requete = getConnexion()->prepare("update chapristi.utilisateur set pseudo_utilisateur = :pseudo where id_utilisateur = :id");
    $requete->bindValue(":id", $id);
    $requete->bindValue(":pseudo", $pseudo);
    return $requete->execute();
}

function modifierEmail($id, $email): bool
{
    $requete = getConnexion()->prepare("update chapristi.utilisateur set email_utilisateur = :email where id_utilisateur = :id");
    $requete->bindValue(":id", $id);
    $requete->bindValue(":email", $email);
    return $requete->execute();
}

function modifierMdp($id, $mdp): bool
{
    $requete = getConnexion()->prepare("update chapristi.utilisateur set mdp_utilisateur = :mdp where id_utilisateur = :id");
    $requete->bindValue(":id", $id);
    $requete->bindValue(":mdp", password_hash($mdp,PASSWORD_DEFAULT));
    return $requete->execute();
}
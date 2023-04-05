<?php
session_start();
require_once "utils/card.php";
require_once "modele/utilisateurDB.php";
require_once "modele/panierDB.php";
require_once "utils/session.php";

$pseudo = null;
$erreur = null;
$profil = null;
$email = null;
$mdp = null;
$count = 1;

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    if (isset($_POST["pseudo"])) {
        $pseudo = $_POST["pseudo"];
        if (checkConnexionUser(strtolower($pseudo), $_POST["mdp"])) {
            $_SESSION["profil"] = getIdUserByUsername($pseudo)[0]["id_utilisateur"];
        }
    } else if (isset($_POST["changerPseudo"])) {
        if (strlen($_POST["changerPseudo"]) > 32) {
            $erreur["pseudo"] = "Pseudo trop long";
        } else {
            modifierPseudo($_SESSION["profil"], strtolower($_POST["changerPseudo"]));
        }
    } else if (isset($_POST["changerEmail"])) {
        if (filter_var($_POST["changerEmail"], FILTER_VALIDATE_EMAIL)) {
            modifierEmail($_SESSION["profil"], strtolower($_POST["changerEmail"]));
        } else {
            $erreur["email"] = "Email incorrect";
        }
    } else if (isset($_POST["changerMdpActuel"])) {
        if (checkConnexionUser(strtolower(getUserById($_SESSION["profil"])[0]["pseudo_utilisateur"]), $_POST["changerMdpActuel"]) && $_POST["changerMdpNew1"] == $_POST["changerMdpNew2"]) {
            modifierMdp($_SESSION["profil"], $_POST["changerMdpNew1"]);
        } else {
            $erreur["mdp"] = "Mot de passe incorrect";
        }
    }
}
if (!isset($_SESSION["profil"])) {
    $_SESSION["profil"] = [];
}
if (!empty($_SESSION["profil"])) {
    $profil = getUserById($_SESSION["profil"])[0];
    $pseudo = $profil["pseudo_utilisateur"];
    $email = $profil["email_utilisateur"];
    while ($email[$count] != "@") {
        $email[$count] = "*";
        $count++;
    }
    $count += 2;
    while ($email[$count] != ".") {
        $email[$count] = "*";
        $count++;
    }
    if (empty(getAllPanierProduitsByIdUser($_SESSION["profil"]))) {
        foreach ($_SESSION["panier"] as $key => $value) {
            ajouterPanierProduit($_SESSION["profil"], $key, $value["quantite"]);
        }
    } else {
        $_SESSION["panier"] = [];
    }

}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/profile.css">
    <title>profil | Chapristi</title>
</head>
<body>
<?php
if (empty($_SESSION["profil"])) {
    signIn($pseudo);
} else { ?>

    <a href='../index.php' id='backToAccueil'>
        <svg
                width="24"
                height="24"
                viewBox="0 0 24 24\
        "
                fill="none"
                xmlns="http://www.w3.org/2000/svg">
            <path
                    d="M20.3284 11.0001V13.0001L7.50011 13.0001L10.7426 16.2426L9.32842 17.6568L3.67157 12L9.32842
                6.34314L10.7426 7.75735L7.49988 11.0001L20.3284 11.0001Z\
        "
                    fill="currentColor"
            />
        </svg>
    </a>
    <div class='contain'>
        <div class='profil'>
            <div class='navigation'>
                <h2>Gestion du compte</h2>
                <ul>
                    <li><a href='#modifier_profil'>Profil</a></li>
                    <li><a href="#informationsPersonnelles">Informations personnelles</a></li>
                    <li><a href="#motDePasse">Mot de passe</a></li>
                </ul>
            </div>
            <div class='utilisateur'>
                <div class='form_container' id='modifier_profil'>
                    <div class='description'><h2>Profil</h2>
                        <p>Nullam non magna quis diam malesuada ultrices ultricies vel mi. Vestibulum at pulvinar
                            nibh.</p></div>
                    <div class='modifications'>
                        <form method='post'>
                            <div class="input_container">
                                <label class="input_label" for="changerPseudo">Pseudo</label>
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user
                                " width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                     stroke="currentColor" fill="none" stroke-linecap="round"
                                     stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z\
                                " fill="none"></path>
                                    <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0\"></path>
                                    <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2\
                                "></path>
                                </svg>
                                <input placeholder="Pseudo" name="changerPseudo" type="text" class="input_field"
                                       id="changerPseudo" value="<?= $pseudo ?>">
                            </div>
                            <?php
                            if (isset($erreur["pseudo"])) {
                                echo "<span class='red'>" . $erreur["pseudo"] . "</span>";
                            }
                            ?>
                            <button title="Sauvegarder" type="reset" class="sign-in_btn">
                                <span>Sauvegarder les modifications</span>
                            </button>
                        </form>
                    </div>
                </div>
                <div class='form_container' id='informationsPersonnelles'>
                    <div class='description'><h2>Informations personnelles</h2>
                        <p>Nullam non magna quis diam malesuada ultrices ultricies vel mi. Vestibulum at pulvinar
                            nibh.</p></div>
                    <div class='modifications'>
                        <form method='post'>
                            <div class="input_container">
                                <label class="input_label" for="changerEmail">Adresse mail</label>
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail
                                " width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                     stroke="currentColor" fill="none" stroke-linecap="round"
                                     stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z\
                                " fill="none"></path>
                                    <path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2
                                      -2v-10z\
                                "></path>
                                    <path d="M3 7l9 6l9 -6\
                                "></path>
                                </svg>
                                <input placeholder="Email" name="changerEmail" onClick="this.select();"
                                       type="text" class="input_field" id="changerEmail" value="<?= $email ?>">
                            </div>
                            <?php
                            if (isset($erreur["email"])) {
                                echo "<span class='red'>" . $erreur["email"] . "</span>";
                            }
                            ?>
                            <button title="Sauvegarder" type="reset" class="sign-in_btn">
                                <span>Sauvegarder les modifications</span>
                            </button>
                        </form>
                    </div>
                </div>
                <div class='form_container' id='motDePasse'>
                    <div class='description'><h2>Connexion au compte</h2>
                        <p>Nullam non magna quis diam malesuada ultrices ultricies vel mi. Vestibulum at pulvinar
                            nibh.</p></div>
                    <div class='modifications'>
                        <form method='post'>
                            <div class="input_container">
                                <label class="input_label" for="changerMdp">Changer votre mot de passe</label>
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-lock mdp"
                                     width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                     fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M5 13a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-6z"></path>
                                    <path d="M11 16a1 1 0 1 0 2 0a1 1 0 0 0 -2 0"></path>
                                    <path d="M8 11v-4a4 4 0 1 1 8 0v4"></path>
                                </svg>
                                <input placeholder="Votre mot de passe actuel" name="changerMdpActuel"
                                       type="text" class="input_field changerMdp" value="">
                                <input placeholder="Nouveau mot de passe" name="changerMdpNew1"
                                       type="text" class="input_field changerMdp" value="">
                                <input placeholder="Confirmer votre nouveau mot de passe" name="changerMdpNew2"
                                       type="text" class="input_field changerMdp" value="">
                            </div>
                            <?php
                            if (isset($erreur["mdp"])) {
                                echo "<span class='red'>" . $erreur["mdp"] . "</span>";
                            }
                            ?>
                            <button title="Sauvegarder" type="reset" class="sign-in_btn">
                                <span>Sauvegarder les modifications</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


<?php }
?>
<script src="profil.js"></script>
</body>
</html>

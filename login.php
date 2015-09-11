<?php

require_once ('data/_data.php');
require_once ('header.php');


define('PSESS_USERNAME', 'username');
//var_dump(dirname($_SERVER['PHP_SELF']));
$login_message = ''; // Message à afficher en cas de bonne ou de mauvaise connexion
$user_is_loggedIn = false; // Indique que l'utilisateur est connecté ou ne l'est pas
$username = null; // Valeur du username
$password = null; // Valeur du password
session_start(); // Démarrage de session PHP
if (array_key_exists('connect', $_POST)
    && array_key_exists('username', $_POST)
    && array_key_exists('password', $_POST))
{
    // L'utilisateur cherche à se connecter ....
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    require_once('_authenticate.php'); // Appel du script qui gère l'authentification
    if (authenticate($username,$password)) {
        // L'utilisateur est authentifié
        $_SESSION[PSESS_USERNAME] = $username;
        $user_is_loggedIn = true;
        $path = dirname($_SERVER['PHP_SELF']);
        header("Location: " . $path . DIRECTORY_SEPARATOR . "page_detail.php");
        exit;
    } else {
        // Échec de l'authentification
        $login_message = 'L\'identificateur et le mot de passe fournis ne concordent pas.';
    }

} elseif (array_key_exists('disconnect', $_POST)) {
    unset($_SESSION[PSESS_USERNAME]); // Supprimer la variable 'username' de la session
    $user_is_loggedIn = false;
} else {
    // Cas du "GET"
    $user_is_loggedIn = array_key_exists(PSESS_USERNAME, $_SESSION);
    if ($user_is_loggedIn) {
        $username = $_SESSION[PSESS_USERNAME];
        $login_message = 'Location: page_detail.php';
    } // Sinon rien à faire
}

?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Accueil</title>
</head>
<body>

<div class="form-block">
    <div class="container">
    <div class="row">
    <div class="col-md-6 col-sm-6">
<h1 style="margin-left: 40px;">Enregistrez-vous pour voir les details et acheter</h1>
<div id="login_logout_form">
    <span><?php echo $login_message; ?></span>
    <?php if ($user_is_loggedIn) { ?>
        <form method="post">
            <input type="submit" name="disconnect" id="se_deconnecter" value="Déconnexion"/>
        </form>
    <?php } else { ?>


        <form method="post" class="form-group"">
            <label>Username: </label>
            <input type="text" name="username" id="username" value="<?php echo isset($username) ? $username : ''; ?>"/><br>
            <label>Password:  </label>
            <input type="password" name="password" id="password" value="<?php echo isset($password) ? $password : ''; ?>"/><br>
            <input type="submit" name="connect" id="se_connecter" value="Connexion"/>
        </form>
    <?php } ?>

</div>
    </div>
    </div>
    </div>

</div><br/><br/><br/><br/><br/>

<?php
require_once('footer.php');
?>
<?php
require 'core.php';
require 'Utilitaires.php';
$Montitle = 'Se connecter';

    if (isset($_POST['Pseudo']) && isset($_POST['MDP']))
    {
        // Récupère la valeur "admin" qui se trouve dans la DB si le pseudo et MDP correspondent
        // à un utilisateur existant dans la DB, sinon il retourne null
        $member = Utilitaires::Authentification($_POST['Pseudo'], $_POST['MDP']);

        if($member != null)
            {
                $_SESSION['UTILISATEUR_OK'] = $member;
                require '../view/haut.php';
                header('refresh:2;url=../controller/index.php');
                echo '<div id="background"><div id="blanc" style="height: 100px;"></div><div id="margins"><div id="recherche" ><h3 class="alert alert-succes" align="center">Bonjour '.$_POST['Pseudo'].' ! Vous allez être redirigé...</h3></div></div></div>';
            }
            else
            {
                require '../view/haut.php';
                require '../view/login.php';
                echo '<br><div class="alert alert-danger" align="center">Votre pseudo ou le mot de passe est mauvais !</div>';
            }
    }
    else
    {
        require '../view/haut.php';
        require '../view/login.php';
    }
    require '../view/bas.php';
 ?>

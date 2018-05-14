<?php
require 'core.php';
require 'Utilitaires.php';

    if (isset($_POST['Pseudo']) && isset($_POST['MDP']))
    {
        if(Utilitaires::Authentification($_POST['Pseudo'], $_POST['MDP']))
            {
                $_SESSION['UTILISATEUR_OK'] = true;
                require '../view/haut.php';
                echo 'Bonjour '.$_POST['Pseudo'].', vous êtes à présent connecté !</br>';
            }
            else
            {
                require '../view/haut.php';
                echo 'Votre pseudo ou le mot de passe est mauvais !';
                require '../view/login.php';
            }
    }
    else
    {
        require '../view/haut.php';
        require '../view/login.php';
    }
    require '../view/bas.php';
 ?>
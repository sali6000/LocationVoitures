<?php
require 'core.php';
require 'Utilitaires.php';
$Montitle = 'Se connecter';

    if (isset($_POST['Pseudo']) && isset($_POST['MDP']))
    {
        if(Utilitaires::Authentification($_POST['Pseudo'], $_POST['MDP']))
            {
                $_SESSION['UTILISATEUR_OK'] = true;
                require '../view/haut.php';
                header('refresh:2;url=../controller/page1.php');
                echo '<br><h3 class="alert alert-succes" align="center">Bonjour '.$_POST['Pseudo'].' ! Vous allez être redirigé...</h1></br>';
            }
            else
            {
                require '../view/haut.php';
                require '../view/login.php';
                echo '<br><div class="alert alert-danger" align="center"> Votre pseudo ou le mot de passe est mauvais !</div>';
            }
    }
    else
    {
        require '../view/haut.php';
        require '../view/login.php';
    }
    require '../view/bas.php';
 ?>
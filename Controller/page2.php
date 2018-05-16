<?php 
	
	// Controller requis
	require 'core.php';

	//Condition permettant d'afficher un utilisateur si $_POST['id'] n'est pas null
	if (isset($_POST['id'])) 
	{
		// On modifie le titre du site
		$Montitle = 'Profil de '.$_POST['id'];

		// On affiche le haut du site
		require '../view/haut.php';

		// On ouvre la connection à la base de donnée, 
		// on intègre le model dans le controller pour qu'elle sois accessible depuis la vue
		// et on transforme la variable $Utilisateur en un objet (return new exemple();)
		$Utilisateurs=Model::load("utilisateurs");

		// On assigne $_POST['id'] à la propriété id appartenant à l'objet $Utilisateurs 
		$Utilisateurs->id = $_POST['id'];

		// On récupère toute les informations concernant l'id dans la base de donnée
		// et on insère le contenu récupéré dans l'objet $Utilisateurs
		$Utilisateurs->read();

		// On affiche la vue page2Detail.php
		require '../view/page2Detail.php';
    }
    else
    {
    	$Montitle = 'Membres';
		require '../view/haut.php' ;
    	$Utilisateurs=Model::load("utilisateurs");
    	// On récupère toute les informations concernant tous les utilisateurs dans la base de donnée
		$Utilisateurs->read();
		require '../view/page2.php';
    }
?>
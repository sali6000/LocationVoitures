<?php 
	require 'core.php';

	if (isset($_POST['id'])) 
	{
		$Montitle = 'Profil de '.$_POST['id'];
		require '../view/haut.php' ;
		$Utilisateurs=Model::load("utilisateurs");
		$Utilisateurs->id = $_POST['id'];
		$Utilisateurs->read();
		require '../view/page2Detail.php';
    }
    else
    {
    	$Montitle = 'Membres';
		require '../view/haut.php' ;
    	$Utilisateurs=Model::load("utilisateurs");
		$Utilisateurs->read();
		require '../view/page2.php';
    }
?>
<?php 
	$Montitle= 'Mon Title 2x';
	require 'core.php';
	require '../view/haut.php' ;
	$Utilisateurs=Model::load("utilisateurs");
	$Utilisateurs->read();
	require '../view/page2.php';
?>
<?php
session_start();
	require('../model/model.php');
	$server = "http://$_SERVER[HTTP_HOST]";
	$page = "$_SERVER[REQUEST_URI]";

	if(isset($_SESSION['UTILISATEUR_OK']) == null && $page != "/LocationVoitures/LocationVoitures/controller/login.php")
	{
		header("Location: $server/LocationVoitures/LocationVoitures/controller/login.php");
	}
?>
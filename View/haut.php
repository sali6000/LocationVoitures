<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $Montitle; ?></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="../view/css/page.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<body class="text-center">
	<nav class="navbar navbar-inverse" id="haut">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="../controller/Page1.php">Location de voitures</a>
			</div>
			<ul class="nav navbar-nav">
				<li><a href="../controller/Page1.php">Voitures</a></li>
				<li><a href="../controller/member.php">Membres</a></li>
				<?php
				if(isset($_SESSION['UTILISATEUR_OK']) != null)
				{
					Echo '<li><a href="../view/session_destroy.php">Se déconnecter</a></li>';
				}
				else
				{
					Echo '<li><a href="../controller/login.php">Se connecter</a></li>';
				}
				?>
			</ul>
		</div>
	</nav>

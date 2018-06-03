<?php

	// Options requises :
require 'core.php';

	// --------------------------- CONTROLLER (IF) -------------------------- //

	// READ MEMBER BY ID
if(isset($_POST['readId']))
{
		// On modifie le titre du site
	$Montitle = "Lecture du profil de: ".$_POST['readId'];
		// On actualise le haut du site
	require '../view/haut.php';
	require ('../model/member.php');
		// On passe le model à la vue
	require ('../model/utilisateurs.php');
		// On crée l'objet utilisateur sur base du model et on lui donne les données de la DB
		$membre = MemberGetById($_POST['readId']); // (return new utilisateur(); avec les infos)
		// On affiche la vue page2Detail.php avec les détails concernant l'objet
		require '../view/memberDetail.php';
		require '../view/bas.php';
	}
	// UPDATE MEMBER (GETTER BY ID)
	else if(isset($_POST['getUpdateId']))
	{
		// On modifie le titre du site
		$Montitle = "Modification du profil de : ".$_POST['getUpdateId'];
		// On actualise le haut du site
		require '../view/haut.php';
		require ('../model/member.php');
		// On passe le model à la vue
		require ('../model/utilisateurs.php');
		// On crée l'objet utilisateur sur base du model et on lui donne les données de la DB
		$membre = MemberGetById($_POST['getUpdateId']); // (return new utilisateur(); avec les infos)
		// On affiche la vue page2Detail.php avec les détails concernant l'objet
		require '../view/memberUpdate.php';
		require '../view/bas.php';
	}
	// UPDATE MEMBER (SETTER)
	else if(isset($_POST['utilisateur']) && isset($_POST['nom']) && isset($_POST['prenom']))
	{
		$test = new model();
		$test->callStockProcedure(
			$_POST['utilisateur'],
			$_POST['password'],
			$_POST['nom'],
			$_POST['prenom'],
			$adminInt = ($_POST['admin'] == "Oui")? 1 : 0,
			$actifInt = ($_POST['actif'] == "Oui")? 1 : 0);
		echo 'Success';
	}
	// READ MEMBERS
	else
	{
		$Montitle = 'Lecture des membres';
		require '../view/haut.php' ;
		require ('../model/member.php');
		require ('../model/utilisateurs.php');
		// On affiche les membres
		$membres = MemberGetList();
		require '../view/memberList.php';
		require '../view/bas.php';
	}

	// -------------------------- METHODES ---------------------------//

	// FUNCTION GET MEMBER BY ID
	function MemberGetById($id)
	{
		// On ouvre la connection à la base de donnée,
		// on intègre le model dans le controller pour qu'il sois accessible depuis la vue
		// et on transforme la variable $user en un objet du type voulus (return new exemple();)
		$userDatas = new utilisateurs();

		// On assigne $_POST['readId'] à la propriété id appartenant à l'objet $Utilisateurs
		$userDatas->id = $id;

		// On récupère toute les informations concernant l'id  dans la base de donnée
		// et on insère le contenu récupéré dans l'objet $userObject
		$userDatas->read();
		$userObject = new Member(
			$userDatas->data[0]->utilisateur,
			$userDatas->data[0]->code,
			$userDatas->data[0]->nom,
			$userDatas->data[0]->prenom,
			$userDatas->data[0]->admin,
			$userDatas->data[0]->actif);

		// On retourne l'objet utilisateur
		return $userObject;
	}

    // FUNCTION GET LIST MEMBERS
	function MemberGetList()
	{

		$members = new utilisateurs();

    	// On récupère toute les informations concernant tous les utilisateurs dans la base de donnée
		$members->read();

		// On crée une List vide
		$userObjectList = [];

		// On parcours la List à l'aide d'un compteur pour y ajouté des Membre
		$j = 0;
		foreach($members->data as $d)
		{
			$userObjectList[$j] = new Member($d->utilisateur,$d->code,$d->nom,$d->prenom,$d->admin,$d->actif);
			$j = $j+1;
		}

		// On retourne la List de Membres
		return $userObjectList;
	}

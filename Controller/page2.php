<?php 
	
	// Options requises :
	require 'core.php';

	// Controller CRUD
	if(isset($_POST['readId']))
	{
		// On modifie le titre du site
		$Montitle = "Profil de: ".$_POST['readId'];
		// On actualise le haut du site
		require '../view/haut.php';
		require ('../model/membre.php');
		// On passe le model à la vue
		require ('../model/utilisateurs.php');
		// On crée l'objet utilisateur sur base du model et on lui donne les données de la DB
		$membre = MemberGetById($_POST['readId']); // (return new utilisateur(); avec les infos)
		// On affiche la vue page2Detail.php avec les détails concernant l'objet
		require '../view/page2Detail.php';
	}
	else if(isset($_POST['updateId']))
	{
		
	}
	else
	{
		$Montitle = 'Membres';
		require '../view/haut.php' ;
		require ('../model/membre.php');
		require ('../model/utilisateurs.php');
		// On affiche les membres
		$membres = MemberGetList();
		require '../view/page2.php';
	}
	// Bas de page
    require '../view/bas.php';

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
		$userObject = new Membre(
			$userDatas->data[0]->utilisateur,
			$userDatas->data[0]->nom,
			$userDatas->data[0]->prenom,
			$userDatas->data[0]->admin,
			$userDatas->data[0]->actif);

		// On retourne l'objet utilisateur
		return $userObject;
    }

    // Retourne une liste d'objets Membre
    function MemberGetList()
    {
    	$members = new utilisateurs();
    	// On récupère toute les informations concernant tous les utilisateurs dans la base de donnée
		$members->read();

		// On créer une List vide
		$userObjectList = [];

		// On parcours la List à l'aide d'un compteur pour y ajouté des Membre
		$j = 0;
		foreach($members->data as $d)
		{
			$userObjectList[$j] = new Membre($d->utilisateur,$d->nom,$d->prenom,$d->admin,$d->actif);
			$j = $j+1;
		} 

		// On retourne la List de Membre
		return $userObjectList;
    }
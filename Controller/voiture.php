<?php

	// Options requises :
	require 'core.php';

	// --------------------------- CONTROLLER (IF) -------------------------- //

	// READ VOITURE BY ID
	if(isset($_POST['readId']))
	{
		// On modifie le titre du site
		$Montitle = "Lecture de la voiture: ".$_POST['readId'];
		// On actualise le haut du site
		require '../view/haut.php';
		require ('../model/voiture.php');
		// On passe le model à la vue
		require ('../model/voitureDB.php');
		// On crée l'objet voiture sur base du model et on lui donne les données de la DB
		$voiture = VoitureGetById($_POST['readId']); // (return new utilisateur(); avec les infos)
		// On affiche la vue voitureDetail.php avec les détails concernant l'objet
		require '../view/voitureDetail.php';
		require '../view/bas.php';
	}
	// UPDATE voiture (GETTER BY ID)
	else if(isset($_POST['getUpdateId']))
	{
		// On modifie le titre du site
		$Montitle = "modification de la voiture: ".$_POST['getUpdateId'];
		// On actualise le haut du site
		require '../view/haut.php';
		require ('../model/voiture.php');
		// On passe le model à la vue
		require ('../model/voitureDB.php');
		// On crée l'objet voiture sur base du model et on lui donne les données de la DB
		$voiture = VoitureGetById($_POST['getUpdateId']); // (return new VOITURE(); avec les infos)
		// On affiche la vue voitureDetail.php avec les détails concernant l'objet
		require '../view/voitureUpdate.php';
		require '../view/bas.php';
	}
	// UPDATE VOITURE (SETTER)
	else if(isset($_POST['marque']) && isset($_POST['modele']) && isset($_POST['couleur']))
	{
		$test = new model();
		$test->callStockVoiture(
			(int)$_POST['id'],
			$_POST['marque'],
			$_POST['modele'],
			$_POST['couleur'],
			(int)$_POST['date_location'],
			(int)$_POST['date_retour']);
		echo 'Success';
	}
	// READ VOITURES
	else
	{
		$Montitle = 'Lecture des voiture';
		require '../view/haut.php' ;
		require '../model/voiture.php';
		require '../model/voitureDB.php';
		// On affiche les voitures
		$voiture = VoitureGetList();
		require '../view/voitureList.php';
		require '../view/bas.php';
	}

	// -------------------------- METHODES ---------------------------//

	// FUNCTION GET VOITURE BY ID
    function VoitureGetById($id)
    {
		// On ouvre la connection à la base de donnée,
		// on intègre le model dans le controller pour qu'il sois accessible depuis la vue
		// et on transforme la variable $voiture en un objet du type voulus (return new exemple();)
		$voitureDatas = new voitureDB();

		// On assigne $_POST['readId'] à la propriété id appartenant à l'objet $Utilisateurs
		$voitureDatas->id = $id;

		// On récupère toute les informations concernant l'id  dans la base de donnée
		// et on insère le contenu récupéré dans l'objet $voitureObject
		$voitureDatas->read();
		$voitureObject = new voiture(
			$voitureDatas->data[0]->voitureID,
			$voitureDatas->data[0]->marque,
			$voitureDatas->data[0]->modele,
			$voitureDatas->data[0]->couleur,
			$voitureDatas->data[0]->date_location,
			$voitureDatas->data[0]->date_retour,
			$voitureDatas->data[0]->actif);

		// On retourne l'objet voiture
		return $voitureObject;
    }

    // FUNCTION GET LIST Voiuture
    function VoitureGetList()
    {

    	$voiture = new voitureDB();

    	// On récupère toute les informations concernant toutes les voitures dans la base de donnée
		$voiture->read();

		// On crée une List vide
		$voitureObjectList = [];

		// On parcours la List à l'aide d'un compteur pour y ajouté des voitures
		$j = 0;
		foreach($voiture->data as $d)
		{
			$voitureObjectList[$j] = new Voiture($d->voitureID,$d->marque,$d->modele,$d->couleur,$d->date_location,$d->date_retour,$d->actif);
			$j = $j+1;
		}

		// On retourne la List de Voitures
		return $voitureObjectList;
    }

<?php
class Utilitaires
{
	public static function Authentification($pseudo,$motDePasse)
	{
		$utilisateurs=Model::load("utilisateurs"); // Cette méthode créer une class utilsateur
		$utilisateurs->id=$pseudo;
		$utilisateurs->read();

		if(!empty($utilisateurs->data) 
			&& ($utilisateurs->data[0]->code == $motDePasse) 
			&& ($utilisateurs->data[0]->actif == 1))
		{
			return (string)$utilisateurs->data[0]->admin;
		}
		else
		{
			return false;
		}
	}
}
?>
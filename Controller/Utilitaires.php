<?php
class Utilitaires
{

	public static function Authentification($pseudo,$motDePasse)
	{
		$utilisateurs=Model::load("utilisateurs");
		$utilisateurs->id=$pseudo;
		$utilisateurs->read();

		return (!empty($utilisateurs->data)) 
		&& ($utilisateurs->data[0]->code==$motDePasse) 
		&& ($utilisateurs->data[0]->actif == 1);
	}
}
?>
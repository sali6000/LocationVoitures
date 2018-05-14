<?php

class Utilitaires
{

	public static function Authentification($pseudo,$motDePasse)
	{
		$utilisateurs=Model::load("utilisateurs");
		$utilisateurs->read();

		$utilisateurs->id=$pseudo;

		if($utilisateurs->data[0]->code==$motDePasse)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
}
?>
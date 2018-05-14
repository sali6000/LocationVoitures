<?php
class Utilitaires
{
	public static function Authentification($pseudo,$motDePasse)
	{
		$utilisateurs=Model::load("utilisateurs");
		$utilisateurs->id=$pseudo;
		$utilisateurs->read();
		if($utilisateurs->data[0]->code==$motDePasse && $utilisateurs->data[0]->actif == 1)
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
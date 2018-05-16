<?php
class Utilisateurs extends Model{

	// Variables public et accessibles depuis le Model (utilisées pour la connection à la DB)
	var $table = "utilisateurs";	
	var $id;
	var $PK = "utilisateur";
	var $actif;
	var $data;
}
?>
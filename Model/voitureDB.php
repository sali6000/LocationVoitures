<?php
class VoitureDB extends Model{

	// Variables public et accessibles depuis le Model (utilisées pour la connection à la DB)
	var $table = "voitures";	
	var $id;
	var $PK = "voitureID";
	var $actif;
	var $data;
}
?>
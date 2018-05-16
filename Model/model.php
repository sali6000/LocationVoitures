<?php
class Model{
	Public $table;
	private $connection;
	
	function __construct() 
	{
		
		try 
		{
		  // Paramètres de configuration pour la connection à la DB
		  $dns = 'mysql:host=127.0.0.1;dbname=locavoitures';
		  $utilisateur = "root";
		  $motDePasse = '';
		 
		  // Options de connection
		  $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
		 
		  // Initialisation de la connection
		  $this->connection = new PDO( $dns, $utilisateur, $motDePasse, $options );
		} 
		catch ( Exception $e ) 
		{
		  echo "Connection à la base de donnée impossible car : ", $e->getMessage();
		  die();
		}
	}

	// Cette fonction permet de renvoyé un objet dans la propriété $data, 
	// avec en paramètre les colonnes souhaitées
	public function read($fields=null)
	{
		// Si $fields est null alors on selectionne toute les colonnes
		if($fields==null)
		{
			$fields = '*';
		}

		// Si la propriété $this->id est null alors on selectionne toute les lignes
		// Sinon on ne selectionne que la ligne précisée avec $this->PK
		// et on le compare avec $this->id
		if ($this->id== null)
		{
			$sql= 'SELECT '.$fields.' from '.$this->table ;
		}
		else
		{
			$sql= 'SELECT '.$fields.' from '.$this->table .'  where '.$this->PK.' = \''.$this->id.'\'' ;
		}
		
		// Intercepter le message d'erreur si il y en a un
		try 
		{
		  	// On met en forme la requête dans la variable $select
		  	$select = $this->connection->query($sql);
		 
		  	// On prépare la manière dont la requête va être recupérée
			$select->setFetchMode(PDO::FETCH_OBJ); // Dans ce cas çi ce seras en tant qu'objet

			// On transforme la variable $this->data en un objet
			$this->data = new stdClass();

			// On execute la requête
			$this->data = $select->fetchall();
		} 
		catch ( Exception $e ) 
		{
		  echo 'Une erreur est survenue lors de la récupération des créateurs';
		}
	}
	
	// Cette fonction permet de renvoyé une vue avec un model
	static function load($name)
	{
		// Affiche un accès à un model dans dans le controller 
		// (accessible depuis les vues appellées dans le controller)
		require ('../model/'.$name.'.php');

		// retourne un objet portant le nom de la variable
		return new $name();
	}
}
?>


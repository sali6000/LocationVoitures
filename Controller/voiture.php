<?php
class Voitures
{
  // Variables privates
  private $_voitureID;
  private $_marque;
  private $_modele;
  private $_couleur;
  private $_date_location;
  private $_date_retour;
  private $_actif;

  public function __construct($voitureID,$marque,$modele,$couleur,$date_location,$date_retour,$actif)
  {
    $this->_voitureID=$voitureID;
    $this->_marque=$marque;
    $this->_modele=$modele;
    $this->_couleur=$couleur;
    $this->_date_location=$date_location;
    $this->_date_retour=$date_retour;
    $this->_actif=$actif;
  }
  public function SetVoitureID($voitureID)
  {
    $this->_voitureID = $voitureID;
  }
  public function GetVoitureID()
  {
    return $this->_voitureID;
  }

  public function SetMarque($marque)
  {
    $this->_marque = $marque;
  }
  public function GetMarque()
  {
    return $this->_marque;
  }
  
  public function SetModele($modele)
  {
    $this->_modele = $modele;
  }
  public function GetModele()
  {
    return $this->_modele;
  }

  public function SetCouleur()
  {
    $this->_couleur=$couleur;
  }
  public function GetCouleur()
  {
    return $this->_couleur;
  }

  public function SetDateLocation()
  {
    $this->_date_location=$date_location;
  }
  public function GetDateLocation()
  {
    return $this->_date_location;
  }

  public function SetDateRetour()
  {
    $this->_date_retour=$date_retour;
  }
  public function GetDateRetour()
  {
    return $this->_date_retour;
  }

  public function SetActif()
  {
    $this->_actif=$actif;
  }
  public function GetActif()
  {
    return $this->_actif;
  }

  ?>
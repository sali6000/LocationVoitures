<?php
class Membre
{
  private $_utilisateur;
  private $_nom;
  private $_prenom;
  private $_admin;
  private $_actif;

  public function __construct($utilisateur,$nom,$prenom,$admin,$actif)
  {
    $this->_utilisateur=$utilisateur;
    $this->_nom=$nom;
    $this->_prenom=$prenom;
    $this->_admin=$admin;
    $this->_actif=$actif;
  }
  public function SetUtilisateur($utilisateur)
  {
    $this->_utilisateur = $utilisateur;
  }
  public function GetUtilisateur()
  {
    return $this->_utilisateur;
  }
  public function SetNom($nom)
  {
    $this->_nom = $nom;
  }
  public function GetNom()
  {
    return $this->_nom;
  }
    public function SetPrenom($prenom)
  {
    $this->_prenom = $prenom;
  }
  public function GetPrenom()
  {
    return $this->_prenom;
  }
  public function GetAdmin()
  {
    return $this->_admin;
  }
    public function SetAdmin($admin)
  {
    $this->_admin = $admin;
  }
  public function GetActif()
  {
    return $this->_actif;
  }
    public function SetActif($actif)
  {
    $this->_actif = $actif;
  }
}

?>
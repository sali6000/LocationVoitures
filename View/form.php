<?php
class Form
{
  // Variables privates
  private $_nameForm;
  private $_id;
  private $_method;
  private $_action;

  // Constructeur
  public function __construct($Name, $Id, $Method, $Action)
  {
    $this->_nameForm = $Name;
    $this->_id = $Id;
    $this->_method = $Method;
    $this->_action = $Action;
  }

  public function SetNameForm($Name)
  {
    $this->_nameForm = $Name;
  }
  public function GetNameForm()
  {
    return $this->_nameForm;
  }

  public function SetAction($Name)
  {
    $this->_action = $Name;
  }
  public function GetAction()
  {
    return $this->_action;
  }
    public function SetMethod($Name)
  {
    $this->_method = $Name;
  }
  public function GetMethod()
  {
    return $this->_method;
  }

  public function AddInput($Label, $Name, $Id, $Required, $PlaceHolder, $Value)
  {
    echo '<h3>*'.$Label.':<br><input type="text" name="'.$Name.'" placeholder="'.$PlaceHolder.'"/><br><br></h3>';
  }

  public function GetSubmit($Name,$Value)
  {
    echo  '<input type="submit" value="'.$Value.'" /></form></article></div></section></div></div>';
  }

  public function GetForm()
  {
    echo '<div class="container">
          <div class="row">
          <section class="col-lg-6">
          <div class="row">         
          <article class="col-sm-6">
          <h2>'.$this->GetNameForm().'<br /></h2>
          <form action="'.$this->GetAction().'" method="'.$this->GetMethod().'">';
  }
}
?>
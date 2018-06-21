<div id="fondBlanc">
 <hr />
 <h4 align="center">Voiture: <b><?= $voiture->getMarque()?></b></h4>
 <hr />
 <dl class="dl-horizontal">
  <dt>Modele:</dt><dd><?= $voiture->GetModele()?></dd>
  <dt>Couleur:</dt><dd><?= $voiture->GetCouleur()?></dd>
  <dt>Date de Location:</dt><dd><?= $voiture->GetDateLocation()?></dd>
  <dt>Date de retour:</dt><dd><?= $voiture->GetDateRetour()?></dd>
  <dt>Actif:</dt><dd><?= $actif = (($voiture->GetActif()>0) ? "Oui" : "Non")?></dd>
  <?php
  require 'Utilitaires.php';

  if($_SESSION['UTILISATEUR_OK'] > 0)
  {
    include 'voitureUpdate.php';
  }
  ?>
  <hr />
</dl>
<hr />
</div>

<script src="../view/script/showModal.js" type="text/javascript" charset="utf-8" async defer></script>

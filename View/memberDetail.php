<div id="fondBlanc">
  <hr />
  <h4 align="center">Modification du profil de <b><?= $membre->getUtilisateur()?></b></h4>
  <hr />
  <dl class="dl-horizontal">
   <dt>Utilisateur:</dt><dd><?= $membre->getUtilisateur()?></dd>
   <dt>Prenom:</dt><dd><?= $membre->getPrenom()?></dd>
   <dt>Nom:</dt><dd><?= $membre->getNom()?></dd>
   <dt>Admin:</dt><dd><?= $admin = (($membre->getAdmin()>0) ? "Oui" : "Non")?></dd>
   <dt>Actif:</dt><dd><?= $actif = (($membre->getActif()>0) ? "Oui" : "Non")?></dd>
   <?php
   require 'Utilitaires.php';

   if($_SESSION['UTILISATEUR_OK'] > 0)
   {
    include 'memberUpdate.php';
  }?>
  <hr />
</dl>
<hr />
</div>
<script src="../view/script/showModal.js" type="text/javascript" charset="utf-8" async defer></script>

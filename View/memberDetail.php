<div>
    <h4>Membre</h4>
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
				echo '<dt>Action:</dt><dd><form id="bouton" name="bouton" method="post" action="#">
				<button class="btn btn-dark" type="submit" name="getUpdateId" id="bouton" value="'.$membre->getUtilisateur().'">Modifier le profil</button></form></dd>';
			}
			?>
	</dl>
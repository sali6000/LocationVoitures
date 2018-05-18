<div>
    <h4>Membre</h4>
    <hr />
    <dl class="dl-horizontal">
    	<dt>Utilisateur:</dt><dd><?= $membre->getUtilisateur()?></dd>
		<dt>Prenom:</dt><dd><?= $membre->getPrenom()?></dd>
		<dt>Nom:</dt><dd><?= $membre->getNom()?></dd>
		<dt>Admin:</dt><dd><?= $admin = (($membre->getAdmin()>0) ? "Oui" : "Non")?></dd>
		<dt>Actif:</dt><dd><?= $actif = (($membre->getActif()>0) ? "Oui" : "Non")?></dd>
		<dt></dt><dd></dd>
	</dl>
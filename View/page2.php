<table class="table">
	<tr>
		<th>Utilisateur</th>
		<th>Nom</th>
		<th>Prenom</th>
		<th>Admin</th>
		<th>Actif</th>
		<th>Action</th>
		<th></th>
	</tr>
	<?php
	foreach($membres as $k)
	{
		echo '<tr>
				<td>'.$k->getUtilisateur().'</td>
				<td>'.$k->getNom().'</td>
				<td>'.$k->getPrenom().'</td>
				<td>'.$k->getAdmin().'</td>
				<td>'.$k->getActif().'</td>
				<td>
					<form id="bouton" name="bouton" method="post" action="#">
  						<button class="btn btn-dark" type="submit" name="readId" id="bouton" value="'.$k->getUtilisateur().'">Voir le profil
  						</button>
  						<button class="btn btn-dark" type="submit" name="updateId" id="bouton" value="'.$k->getUtilisateur().'">Modifier le profil
  						</button>
  					</form>
  				</td><td><td></tr>';}?>
</table>
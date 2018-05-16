<table class="table">
	<tr>
		<th>Utilisateur</th>
		<th>Nom</th>
		<th>Prenom</th>
		<th>Admin</th>
		<th>Actif</th>
		<th>Action</th>

	</tr>
	<?php
	foreach($Utilisateurs->data as $k)
	{
		echo '<tr>
			<td>'.$k->utilisateur.'</td>
			<td>'.$k->nom.'</td>
			<td>'.$k->prenom.'</td>
			<td>'.$k->admin.'</td>
			<td>'.$k->actif.'</td>
			<td><form id="bouton" name="bouton" method="post" action="#">
  				<button class="btn btn-dark" type="submit" name="id" id="bouton" value="'.$k->utilisateur.'">Voir le profil</button></form></td>';
	}
	?>
</table>
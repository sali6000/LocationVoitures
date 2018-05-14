<table class="table">
	<tr>
		<th>Utilisateur</th>
		<th>Nom</th>
		<th>Prenom</th>
		<th>Admin</th>
		<th>Actif</th>

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
		</tr>';
	}
	?>
</table>
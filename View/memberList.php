<div align="center">
	<div><b>Effectuer une recherche : </b><input type="text" id="myInput" onkeyup="searchUser('myInput','myTable')" placeholder="Ex: ChuckNorris"></div>
</div>

<table class="table" id="myTable">
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
		<td>'.$admin = (($k->getAdmin()>0) ? "Oui" : "Non").'</td>
		<td>'.$actif = (($k->getActif()>0) ? "Oui" : "Non").'</td>
		<td>
		<form id="bouton" name="bouton" method="post" action="">
		<button class="btn btn-primary" type="submit" name="readId" id="bouton" value="'.$k->getUtilisateur().'">Voir le profil
		</button>
		</form>
		</td>
		<td></td></tr>';}?>
	</table>
	<script src="../view/script/searchMember.js" type="text/javascript" charset="utf-8" async defer></script>

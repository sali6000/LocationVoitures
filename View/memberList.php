<div align="center">
<div style="float:left">Rechercher par utilisateur:  <input type="text" id="myInputUser" onkeyup="searchUser(0,'myInputUser')" placeholder="Ex: DarkMan"></div>
<div style="float:left">Rechercher par nom:  <input type="text" id="myInputName" onkeyup="searchUser(1,'myInputName')" placeholder="Ex: Jhon"></div>
<div style="float:left;">Rechercher par prénom:  <input type="text" id="myInputFirstname" onkeyup="searchUser(2,'myInputFirstname')" placeholder="Ex: Vandenborre"></div>
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
					<form id="bouton" name="bouton" method="post" action="#">
  						<button class="btn btn-dark" type="submit" name="readId" id="bouton" value="'.$k->getUtilisateur().'">Voir le profil
  						</button>
  						<button class="btn btn-dark" type="submit" name="getUpdateId" id="bouton" value="'.$k->getUtilisateur().'">Modifier le profil
  						</button>
  					</form>
  				</td>
  				<td><td></tr>';}?>
</table>
<script src="../view/script/searchMember.js" type="text/javascript" charset="utf-8" async defer></script>

<div align="center">
	<div><b>Effectuer une recherche : </b><input type="text" id="myInput" onkeyup="searchUser('myInput','myTable')" placeholder="Ex: Mercedes"></div>
</div>
<table class="table" id="myTable">
	<tr>
		
		<th>Marque</th>
		<th>Modele</th>
		<th>Couleur</th>
		<th>Date de location</th>
		<th>date de retour</th>
		<th>Actif</th>
		<th>Action</th>
		<th></th>
	</tr>
	<?php
	foreach($voiture as $k)
	{
		echo '<tr>
				<td>'.$k->GetMarque().'</td>
				<td>'.$k->GetModele().'</>
				<td>'.$k->GetCouleur().'</td>
				<td>'.$k->GetDateLocation().'</>
				<td>'.$k->GetDateRetour().'</>
				

				<td>'.$actif = (($k->getActif()>0) ? "Oui" : "Non").'</td>
				<td>
					<form id="bouton" name="bouton" method="post" action="">
  						<button class="btn btn-dark" type="submit" name="readId" id="bouton" value="'.$k->GetVoitureID().'">Voir voiture
  						</button>
  					</form>
  				</td>
  				<td></td></tr>';}?>
</table>
<script src="../view/script/searchMember.js" type="text/javascript" charset="utf-8" async defer></script>
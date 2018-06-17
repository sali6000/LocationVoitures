	<div align="center">
		<div id="recherche">
			<br>
			<b>Effectuer une recherche : </b>
			<div class="input-group">
				<input type="text" class="form-control" id="myInput" onkeyup="searchObject('myInput','myTable')" placeholder="Ex: Mercedes"><div class="input-group-btn"><button class="btn btn-default" type="submit">
					<i class="glyphicon glyphicon-search"></i>
				</button>
			</div>
		</div>
		<br>
	</div>
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
  						<button class="btn btn-primary" type="submit" name="readId" id="bouton" value="'.$k->GetVoitureID().'">Voir voiture
  						</button>
  					</form>
  				</td>
  				<td></td></tr>';}?>
</table>
<script src="../view/script/searchObject.js" type="text/javascript" charset="utf-8" async defer></script>

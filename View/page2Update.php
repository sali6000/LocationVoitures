<div class="container-fluid" align="center">
        <h4>Member Update</h4>
        <hr />
		<form class="form-signin form-center" action="#" method="post">
 
			<div class="form-group">
			<label class="form-check-label">Pseudo: </label>
            <div class="col-md-12">
                <input class="form-control" type="text" value="<?= $membre->getUtilisateur() ?>" name="utilisateurValue" required="" maxlength="20" /><br>
            </div>
        	</div>
 
        	<div class="form-group">
        	<label class="form-check-label">Prenom: </label>
            	<div class="col-md-12">
                	<input class="form-control" type="text" value="<?= $membre->getPrenom() ?>" name="prenomValue" required="" maxlength="20" /><br>
            	</div>
        	</div>
 
        	<div class="form-group">
        	  	<label class="form-check-label">Nom: </label>
            	<div class="col-md-12">
                	<input class="form-control" type="text" value="<?= $membre->getNom() ?>" name="nomValue" required="" maxlength="20" /><br>
            	</div>
        	</div>
 
  			<div class="form-group">
  		    	<label class="form-check-label">Admin: <?= ($membre->getAdmin() > 0) ? "Actif" : "Inactif"?></label>
    			<button class="btn btn-dark" type="submit" name="setUpdateAdmin" value="<?=

    			($membre->getAdmin() > 0) ? 0 : 1

    			?>">Activer/Desactiver
  				</button><br>
  			</div>
 
  			<div class="form-group">
  		    	<label class="form-check-label">Activité: <?= ($membre->getActif() > 0) ? "Actif" : "Inactif"?></label>
    			<button class="btn btn-dark" type="submit" name="setUpdateActif">Activer/Desactiver
  				</button><br>
  			</div>

  			<button class="btn btn-lg btn-primary btn-block" type="submit" value="Valider" />Valider</button>
  		</form>
    </div>
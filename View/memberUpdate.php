<div class="container-fluid" align="center">
        <h4>Modification du profil de <?=$_POST['getUpdateId']?></h4>
        <hr />
		<form class="form-signin form-center" action="../controller/page2test.php" method="post">

      <!-- DEBUT DE FORMULAIRE -->

      <!-- AFICHAGE DU RESULTAT DE LA REQUETE JQUERY -->
      <p id="resultat"></p>

      <!-- PSEUDO -->
			<div class="form-group">
			<label class="form-check-label">Pseudo : </label>
            <div class="col-md-12">
                <input id="isUtilisateur" class="form-control" type="text" value="<?= $membre->getUtilisateur() ?>" name="utilisateurValue" required="" maxlength="20" readonly/><br>
            </div>
        	</div>

          <!-- MOT DE PASSE -->
          <div class="form-group">
              <label class="form-check-label">Mot de passe : </label>
              <div class="col-md-12">
                  <input id="isPassword" class="form-control" type="password" value="<?= $membre->getMotDePasse() ?>" required="" maxlength="20" /><br>
              </div>
          </div>

          <!-- PRENOM -->
        	<div class="form-group">
            <label class="form-check-label">Prénom : </label>
            <div class="col-md-12">
              <input id="isPrenom" class="form-control" type="text" value="<?= $membre->getPrenom() ?>" name="prenomValue" required="" maxlength="20" /><br>
            </div>
        	</div>

          <!-- NOM -->
        	<div class="form-group">
        	  	<label class="form-check-label">Nom : </label>
            	<div class="col-md-12">
                	<input id="isNom" class="form-control" type="text" value="<?= $membre->getNom() ?>" name="nomValue" required="" maxlength="20" /><br>
            	</div>
        	</div>

        <!-- ADMIN -->
  			<div class="form-group">
          <label class="form-check-label">Admin : </label>
          <input id="isAdmin" value="<?= $isAdmin = ($membre->getAdmin() > 0) ? "Oui" : "Non" ?>" readonly></input>
          <button type="button" class="btn btn-primary" onclick="updateStatut('<?php echo $isAdmin; ?>', 'isAdmin')">
            Activer/Désactiver
          </button><br>
  			</div>


        <!-- ACTIF -->
  			<div class="form-group">
          <label class="form-check-label">Actif : </label>
  		    <input id="isActif" value="<?= $isActif = ($membre->getActif() > 0) ? "Oui" : "Non" ?>" readonly></input>
          <button type="button" id="button" class="btn btn-primary" onclick="updateStatut('<?php echo $isActif; ?>', 'isActif')">
            Activer/Désactiver
  				</button><br>
  			</div>

        <!-- VALIDATION -->
        <div class="btn btn-lg btn-primary btn-block" id="submit" value="Valider" />Sauvegarder le changement</div>

        <!-- FIN DE FORMULAIRE -->
      </form>
    </div>
<script src="../view/script/updateMember.js" type="text/javascript" charset="utf-8" async defer></script>
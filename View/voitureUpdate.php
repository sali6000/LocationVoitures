<dt>Action:</dt>
<dd>
  <button class="btn btn-primary" id="myBtn">Modifier la voiture</button>
</dd>

<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">

    <span class="close">&times;</span>

    <div class="container-fluid" align="center">
      <h4>Modifier la voiture</h4>
      <hr />
      <!-- DEBUT DE FORMULAIRE -->
      <!-- AFICHAGE DU RESULTAT DE LA REQUETE JQUERY -->
      <p id="resultatVoiture"></p>

      <!-- MARQUE -->
      <div class="form-group">
        <label class="form-check-label"> Marque : </label>
        <div class="col-md-12">
          <input id="isMarque" class="form-control" type="text" value="<?= $voiture->GetMarque() ?>" name="marqueValue" required="" maxlength="20" /><br>
        </div>
      </div>

      <!-- MODELE -->
      <div class="form-group">
        <label class="form-check-label">Modele : </label>
        <div class="col-md-12">
          <input id="isModele" class="form-control" type="text" value="<?= $voiture->GetModele() ?>" name="modeleValue" required="" maxlength="20" /><br>
        </div>
      </div>

      <!-- COULEUR -->
      <div class="form-group">
        <label class="form-check-label">Couleur : </label>
        <div class="col-md-12">
          <input id="isCouleur" class="form-control" type="text" value="<?= $voiture->GetCouleur() ?>" name="couleurValue" required="" maxlength="20" /><br>
        </div>
      </div>

      <!-- DATE DE LOCATION -->
      <div class="form-group">
        <label class="form-check-label">Date de Location : </label>
        <div class="col-md-12">
          <input id="isDateLocation" class="form-control" type="text" value="<?= $voiture->GetDateLocation() ?>" name="DateLocationValue" required="" maxlength="20" /><br>
        </div>
      </div>

      <!-- DATE DE RETOUR -->
      <div class="form-group">
        <label class="form-check-label">Date de retour : </label>
        <div class="col-md-12">
          <input id="isDateRetour" class="form-control" type="text" value="<?= $voiture->GetDateRetour() ?>" name="DateDeRetourValue" required="" maxlength="20" /><br>
        </div>
      </div>

      <!-- ACTIF -->
      <div class="form-group">
        <label class="form-check-label">Actif : </label>
        <input id="isActif" value="<?= $isActif = ($voiture->GetActif() > 0) ? "Oui" : "Non" ?>" readonly></input>
        <button type="button" id="button" class="btn btn-primary" onclick="updateStatut('<?php echo $isActif; ?>', 'isActif')">Activer/Désactiver
        </button><br>
      </div>

      <!-- VALIDATION -->
      <div class="btn btn-lg btn-primary btn-block" id="submitVoiture" value="Valider" />Sauvegarder le changement</div>
    </div>

    <br>

    <div class="container-fluid" align="center">
      <div class="row">
        <footer class="col-lg-12">
          Fait par Steven et Thomas
        </footer>
      </div>
    </div>
  </div>

</div>

<script src="../view/script/showModal.js" type="text/javascript" charset="utf-8" async defer></script>
<script src="../view/script/updateVoiture.js" type="text/javascript" charset="utf-8" async defer></script>
<script src="../view/script/redirection.js" type="text/javascript" charset="utf-8" async defer></script>

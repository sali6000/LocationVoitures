<dt>Action:</dt>
<dd>
  <button class="btn btn-primary" id="myBtn">Modifier le profil</button>
</dd>
<div id="myModal" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <div class="container-fluid" align="center">
      <h4>Modifier le profil</h4>
      <hr />
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
        <?php
        $isAdmin = ($membre->getAdmin() > 0) ? "Oui" : "Non";
        $setUnsetAdmin = ($isAdmin == "Oui")? "Désactiver" : "Activer";
        ?>
        <input id="isAdmin" value="<?= $isAdmin ?>" readonly></input>
        <button type="button" id="buttonAdmin" class="btn btn-primary"><?= $setUnsetAdmin ?></button><br>
      </div>
      <!-- ACTIF -->
      <div class="form-group">
        <label class="form-check-label">Actif : </label>
        <!-- Le symbole suivant représente une valeur qui sera retenue en mémoire contrairement à ce qui se
          trouve dans value="" qui lui représente une valeur front end (qui sera donc affichée et retenue en mémoire)-->
          <?php
          $isActif = ($membre->getActif() > 0) ? "Oui" : "Non";
          $setUnsetActif = ($isActif == "Oui")? "Désactiver" : "Activer";
          ?>
          <input id="isActif" value="<?= $isActif ?>" readonly></input>
          <button type="button" id="buttonActif" class="btn btn-primary"><?= $setUnsetActif ?></button><br>
        </div>
        <!-- VALIDATION -->
        <div class="btn btn-lg btn-primary btn-block" id="submit" value="Valider" />Sauvegarder le changement</div>
        <!-- FIN DE FORMULAIRE -->
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
  <!-- SCRIPT JS --->
  <script src="../view/script/showModal.js" type="text/javascript" charset="utf-8" async defer></script>
  <script src="../view/script/updateMember.js" type="text/javascript" charset="utf-8" async defer></script>
  <script src="../view/script/redirection.js" type="text/javascript" charset="utf-8" async defer></script>

// Cette méthode jquery permet de traité les informations de façons synchronisée (AJAX)
// C'est à dire qu'il n'y a pas de rechargement de page lorsque je souhaite accéder au serveur
//
// Autrement dit, cette méthode jquery permet de faire de l'ajax et donc de ne pas avoir à
// rafraichir la page sur laquel je souhaite effectuer un changement depuis le serveur
$(document).ready(function()
{
    $("#submit").click(function(event)
    {
        // Assigner les valeurs des attributs provenant d'un formulaire PHP dans des variables JVS
        // dans ce cas çi est nécessaire car nous sommes dans du JVS.
        //
        // (La méthode POST permet de ne pas afficher les valeurs dans le protocole HTTP (URL))
        //
        // Les attributs venant d'une méthode POST en PHP doivent donc obligatoirement être assignées
        // dans des variables JVS contrairement à la méthode GET qui permet à du javascript
        // de récupérer directement les valeurs provenant d'un formulaire PHP.
        var utilisateur = $("#isUtilisateur").val();
        var password = $("#isPassword").val();
        var nom = $("#isNom").val();
        var prenom = $("#isPrenom").val();
        var admin = $("#isAdmin").val();
        var actif = $("#isActif").val();

        event.preventDefault();

        // POST contient en paramètre (la destination, les attributs et une méthode de retour)
        $.post(
            '#', // La destination du POST
            {
                // Nous créons les attributs; ex: $_POST('utilisateur') avec les valeurs
                // qu'ils doivent contenir
                utilisateur : utilisateur,
                password : password,
                nom : nom,
                prenom : prenom,
                admin : admin,
                actif : actif,
            },
            function(data)
            {
                if(data == 'Success')
                {
                     // Résultat réussi
                     $("#resultat").html("<br><div class=\"alert alert-success\" align=\"center\">Le changement a bien été effectué, vous allez être redirigé...</div>");
                 }
                 else
                 {
                     // Résultat échoué
                     $("#resultat").html("<br><div class=\"alert alert-danger\" align=\"center\">Une erreur est survenue, vous allez être redirigé...</div>");
                 }
             },
             'text',
             );
    });
});


// Fonctions Jquery pour changer l'état des valeurs dans les inputs
$('#buttonActif').click(function(){
    var statutActif = ($("#isActif").val() == "Oui")? "Non" : "Oui";
    $('#isActif').val(statutActif);
    $('#isActif').text(statutActif);
    var setUnsetActif = (statutActif == "Oui")? "Désactiver" : "Activer";
    $('#buttonActif').text(setUnsetActif);
});

$('#buttonAdmin').click(function(){
    var statutAdmin = ($("#isAdmin").val() == "Oui")? "Non" : "Oui";
    $('#isAdmin').val(statutAdmin);
    $('#isAdmin').text(statutAdmin);
    var setUnsetAdmin = (statutAdmin == "Oui")? "Désactiver" : "Activer";
    $('#buttonAdmin').text(setUnsetAdmin);
});

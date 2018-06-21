// Cette méthode jquery permet de traité les informations de façons synchronisée (AJAX)
// C'est à dire qu'il n'y a pas de rechargement de page lorsque je souhaite accéder au serveur
//
// Autrement dit, cette méthode jquery permet de faire de l'ajax et donc de ne pas avoir à
// rafraichir la page sur laquel je souhaite effectuer un changement depuis le serveur
$(document).ready(function()
{
    $("#submitVoiture").click(function(event)
    {
        console.log(" je rentre dedans");
        // Assigner les valeurs des attributs provenant d'un formulaire PHP dans des variables JVS
        // dans ce cas çi est nécessaire car nous sommes dans du JVS.
        //
        // (La méthode POST permet de ne pas afficher les valeurs dans le protocole HTTP (URL))
        //
        // Les attributs venant d'une méthode POST en PHP doivent donc obligatoirement être assignées
        // dans des variables JVS contrairement à la méthode GET qui permet à du javascript
        // de récupérer directement les valeurs provenant d'un formulaire PHP
        var id =  $("#isId").val();
        console.log(id);
        var marque = $("#isMarque").val();
        console.log(marque);
        var modele = $("#isModele").val();
        console.log(modele);
        var couleur = $("#isCouleur").val();
        console.log(couleur);
        var date_location = $("#isDateLocation").val();
        console.log(date_location);
        var date_retour = $("#isDateRetour").val();
        console.log(date_retour);
        var actif = $("#isActif").val();
        console.log(actif);
        event.preventDefault();

        // POST contient en paramètre (la destination, les attributs et une méthode de retour)
        $.post(
            '#', // La destination du POST
            {
                // Nous créons les attributs; ex: $_POST('utilisateur') avec les valeurs
                // qu'ils doivent contenir

                marque : marque,
                modele : modele,
                couleur : couleur,
                date_location : date_location,
                date_retour : date_retour,
                actif : actif,
                id : id
            },
            function(data)
            {
                if(data == 'Success')
                {
                     // Résultat réussi
                     $("#resultatVoiture").html("<br><div class=\"alert alert-success\" align=\"center\">Le changement a bien été effectué, vous allez être redirigé...</div>");
                }
                else
                {
                     // Résultat échoué
                     $("#resultatVoiture").html("<br><div class=\"alert alert-danger\" align=\"center\">Une erreur est survenue, vous allez être redirigé...</div>");
                }
            },
            'text'
         );
    });
});


// Fonction JVS pour changer l'état d'une valeur dans un input (paragraphes, etc... exclus)

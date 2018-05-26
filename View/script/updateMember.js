// Cette méthode jquery permet de traité les informations de façons synchronisée (AJAX)
// C'est à dire qu'il n'y a pas de rechargement de page lorsque je souhaite accéder au serveur
//
// Autrement dit, cette méthode jquery permet de faire de l'ajax et donc de ne pas avoir à 
// rafraichir la page sur laquel je souhaite effectuer un changement depuis le serveur
$(document).ready(function()
{
    $("#submit").click(function(event)
    {
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
                // Nous récupérons les attributs dans la destination du POST
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
                     // Résultat réussir
                     $("#resultat").html("<br><div class=\"alert alert-success\" align=\"center\"> Le changement a bien été effectué !</div>");
                }
                else
                {
                     // Résultat faux
                     $("#resultat").html("<br><div class=\"alert alert-danger\" align=\"center\"> Le changement n'a bien été effectué !</div>");
                }
            },
            'text'
         );
    });
});


// Fonction JVS pour changer l'état d'une valeur dans un input (paragraphes, etc... exclus)
function updateStatut(valuePhp = 'null', idElement = null) 
{
	var temp = valuePhp == "Oui" ? "Non" : "Oui";
	document.getElementById(idElement).value = temp;
}
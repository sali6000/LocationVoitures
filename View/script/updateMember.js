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
        // POST contien en paramètre (la destination, les valeurs et une méthode)
        $.post(
            '#', // La destination du POST
            {
                // Nous récupérons les datas dans la destination du POST
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
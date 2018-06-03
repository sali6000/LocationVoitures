$(document).ready(function()
{
    $("#actif").click(function(e)
    {
        e.preventDefault();
        // POST contien en paramètre (la destination, les valeurs et une méthode)
        $.post(
            '#', // La destination du POST
            {
                // Nous récupérons la valeur de notre bouton que l'on via le POST
                setUpdateActif :
            },
            function(data)
            {
                var actif = document.getElementById("textActif").innerHTML == "Oui" ? 0 : 1;
                if(data == 'Success')
                {
                     // Résultat réussir
                     $("#resultat").html("<p>data == Success</p>");
                     document.getElementById("textActif").innerHTML = actif;
                }
                else
                {
                     // Résultat faux
                     $("#resultat").html("<p>data == Failed</p>");
                }
            },
            'text'
         );
    });
});

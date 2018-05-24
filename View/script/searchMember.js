function searchUser(colonne, baliseId) 
{

  // Declaration des variables
  var input, filter, table, tr, td, i;
  input = document.getElementById(baliseId);
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Analyse toutes les lignes et cache toutes celles qui ne correspondent pas au critère de recherche
  for(i = 0; i < tr.length; i++) 
  {
    td = tr[i].getElementsByTagName("td")[colonne];

    if(td) 
    {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) 
      {
        tr[i].style.display = "";
      } 
      else 
      {
        tr[i].style.display = "none";
      }
    }
  }
}
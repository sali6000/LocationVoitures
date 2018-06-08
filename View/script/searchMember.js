function searchUser(inputId, tableId)
{

  // Declaration des variables
  var input, filter, table, tr, td, i;

  //input = Elena
  input = document.getElementById(inputId);

  // filtre = ELENA
  filter = input.value.toUpperCase();

  // table = myTable
  table = document.getElementById(tableId);

  // tr = tr (lignes) in myTable
  tr = table.getElementsByTagName("tr");

  tdLengt = table.getElementsByTagName("td");

  // Analyse toutes les lignes et cache toutes celles qui ne correspondent pas au critère de recherche
  for(i = 0; i < tr.length; i++)
  {
    var find = false;
    for(j = 0; j < 4; j++)
    {

      td = tr[i].getElementsByTagName("td")[j];

      if(td)
      {
        if (td.innerHTML.toUpperCase().indexOf(filter) > -1)
        {
          tr[i].style.display = "";
          find = true;
        }
        else if(find == false)
        {
          tr[i].style.display = "none";
        }
      }
    }
  }
}

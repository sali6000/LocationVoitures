$(document).ready(function()
{
	$('#submitVoiture').click(function(e)
	{
    e.preventDefault();
    setTimeout(function(){ window.location.href = "voiture.php"; }, 3000);
  });
});

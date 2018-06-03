$(document).ready(function()
{
	$('#submit').click(function(e)
	{
  		e.preventDefault();
  		setTimeout(function(){ window.location.href = "member.php"; }, 3000);
	});
});
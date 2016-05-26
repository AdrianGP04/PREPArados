$("#Help").on("click",function()
{
	event.preventDefault();
	$("#Ninja").attr("class","");
	$("fieldset").attr("disabled","");
	
	var Mode= $(".Mode:checked").val();
	var Set= $(".Set:checked").val();
	/*$("input[name='subject']:checked").each(function()
	{
		 alert($(this).val());
	});
	alert(Mode);
	alert(Set); */
	$.ajax({
		
		url: "../programs/Juego.php",
		
		data:{
			Mode: Mode,
			Set: Set= Set
		},
		type:"GET",
		dataType:"text",
		success: function(data)
		{
			$("#Status").html(data);
		}	
	
	
	
	});
});
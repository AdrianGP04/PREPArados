$("#Help").on("click",function()
{
	alert("Has iniciado una partida");
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
	
	var x=100;
	
	$.ajax({
		
		url: "../programs/Status.php",
		
		data:{
			Mode: Mode,
			Set: Set= Set
		},
		type:"GET",
		dataType:"text",
		success: function(data)
		{
			setInterval(function(){
				$("#Barra").attr("style","width:"+x+"%");
				x-=10;
				$(".Answers").on("click", function(){
					x=100;
				});
	
		},(data)*100);
		}	
	
	
	
	});
	
	
	var random= Math.floor((Math.random() * 4) + 1);
	var section= 0;
	
	$.ajax({										//Para sacar la pregunta
			url: "../programs/Juego_Beta.php",
			
			data:{
					Random: random,
					Section: section
				
			},
			type:"GET",
			dataType: "text",
			success: function(data)
			{
				$("#Question").html(data);
			}
		
	});
	
	section=1;
	
	$.ajax({
			
		
		url: "../programs/Juego_Beta.php",
			
		data:{
				Random: random,
				Section: section,
				
		},
		type:"GET",
		dataType: "text",
		success: function(data)
		{
			$("#A1").html(data);
		}

	});
		
	section=2;
		
	$.ajax({
			
		
		url: "../programs/Juego_Beta.php",
			
		data:{
				Random: random,
				Section: section,
				
		},
		type:"GET",
		dataType: "text",
		success: function(data)
		{
			$("#A2").html(data);
		}

	});	
	
	section=3;
		
	$.ajax({
			
		
		url: "../programs/Juego_Beta.php",
			
		data:{
				Random: random,
				Section: section,
				
		},
		type:"GET",
		dataType: "text",
		success: function(data)
		{
			$("#A3").html(data);
		}

	});	
	
		
	section=4;
		
	$.ajax({
			
		
		url: "../programs/Juego_Beta.php",
			
		data:{
				Random: random,
				Section: section,
				
		},
		type:"GET",
		dataType: "text",
		success: function(data)
		{
			$("#A4").html(data);
		}

	});		
		
		
		
		
		
		
});



$(".Answers").on("click", function()      //Para cuando el juego empieza
{
	var random= Math.floor((Math.random() * 4) + 1);
	var section= 0;
	
	$.ajax({										//Para sacar la pregunta
			url: "../programs/Juego_Beta.php",
			
			data:{
					Random: random,
					Section: section
				
			},
			type:"GET",
			dataType: "text",
			success: function(data)
			{
				$("#Question").html(data);
			}
		
	});
	
	section=1;                   //De aquí en adelante es el mismo código, es para sacar las respuestas, lo trate de hacer con un for 
	
	$.ajax({
			
		
		url: "../programs/Juego_Beta.php",
			
		data:{
				Random: random,
				Section: section,
				
		},
		type:"GET",
		dataType: "text",
		success: function(data)
		{
			$("#A1").html(data);
		}

	});
		
	section=2;
		
	$.ajax({
			
		
		url: "../programs/Juego_Beta.php",
			
		data:{
				Random: random,
				Section: section,
				
		},
		type:"GET",
		dataType: "text",
		success: function(data)
		{
			$("#A2").html(data);
		}

	});	
	
	section=3;
		
	$.ajax({
			
		
		url: "../programs/Juego_Beta.php",
			
		data:{
				Random: random,
				Section: section,
				
		},
		type:"GET",
		dataType: "text",
		success: function(data)
		{
			$("#A3").html(data);
		}

	});	
	
		
	section=4;
		
	$.ajax({
			
		
		url: "../programs/Juego_Beta.php",
			
		data:{
				Random: random,
				Section: section,
				
		},
		type:"GET",
		dataType: "text",
		success: function(data)
		{
			$("#A4").html(data);
		}

	});		
	
	
	
	
});
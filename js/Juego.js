var score=0;

$("#Help").on("click",function()
{
	alert("Has iniciado una partida");
	event.preventDefault();
	$("#Ninja").attr("class","");
	$("fieldset").attr("disabled","");
	$(".Answers").prop("disabled",false);
	$("#Title").html("Game On!");
	$("small").html("0");
	var puntaje=0;
	var Loop=0;

	var Mode= $(".Mode:checked").val();
	var Set= $(".Set:checked").val();
	/*$("input[name='subject']:checked").each(function()
	{
		 alert($(this).val());
	});
	alert(Mode);
	alert(Set); */
	
	if (Mode==1)
	{
		$("#ShowMode").html("Solo <span class='glyphicon glyphicon-user'></span>");
		$("#Status").css("background-color","#66ff66");
	}
	if (Mode==2)
	{
		$("#ShowMode").html("Versus <span class='glyphicon glyphicon-user'></span> <span class='glyphicon glyphicon-flash'></span> <span class='glyphicon glyphicon-user'></span> ");
		$("#Status").css("background-color","#ff4d4d");
	}
	if (Mode==3)
	{
		$("#ShowMode").html("Glory <span class='glyphicon glyphicon-globe'></span>");
		$("#Status").css("background-color","#ffe066");
	}
	
	var x=100;
	
	$.ajax({                      //Contador

		url: "../programs/Status.php",

		data:{
			Mode: Mode,
			Set: Set
		},
		type:"GET",
		dataType:"text",
		success: function(data)
		{
			
			var Interval=setInterval(function(){
				if (x==0)
				{
					alert("Ha terminado");
					$(".Answers").attr("disabled","on");
					$("fieldset").prop("disabled",false);
					$("#Title").html("Game Over");
					clearInterval(Interval);
				}
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
	
	var A= ["#A1","#A2","#A3","#A4"];
	function shuffle(array) {
		var currentIndex = array.length, temporaryValue, randomIndex;

		// While there remain elements to shuffle...
		while (0 !== currentIndex) {

			// Pick a remaining element...
			randomIndex = Math.floor(Math.random() * currentIndex);
			currentIndex -= 1;

			// And swap it with the current element.
			temporaryValue = array[currentIndex];
			array[currentIndex] = array[randomIndex];
			array[randomIndex] = temporaryValue;
		}

	return array;
	}
	
	shuffle(A);
	
	section=1;
	
	$.ajax({                   //De aquí para abajo es para sacar respuestas
			
		
		url: "../programs/Juego_Beta.php",
			
		data:{
				Random: random,
				Section: section,
				
		},
		type:"GET",
		dataType: "text",
		success: function(data)
		{
			$(A[0]).html(data);
			$(A[0]).attr("value","1");
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
			$(A[1]).html(data);
			$(A[1]).attr("value","0");
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
			$(A[2]).html(data);
			$(A[2]).attr("value","0");
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
			$(A[3]).html(data);
			$(A[3]).attr("value","0");
		}

	});		
		
		
		
		
		
		
});


var Loop=0; //Checa la cantidad de veces que has respondido

$(".Answers").on("click", function()      //Para cuando el juego empieza
{
	var Set= $(".Set:checked").val();
	var chosen=$(this).val();
	console.log(chosen);
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
	
	var A= ["#A1","#A2","#A3","#A4"];
	function shuffle(array) {
		var currentIndex = array.length, temporaryValue, randomIndex;

		// While there remain elements to shuffle...
		while (0 !== currentIndex) {

			// Pick a remaining element...
			randomIndex = Math.floor(Math.random() * currentIndex);
			currentIndex -= 1;

			// And swap it with the current element.
			temporaryValue = array[currentIndex];
			array[currentIndex] = array[randomIndex];
			array[randomIndex] = temporaryValue;
		}

	return array;
	}
	
	
	shuffle(A);
	
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
			$(A[0]).html(data);
			$(A[0]).attr("value","1");
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
			$(A[1]).html(data);
			$(A[1]).attr("value","0");
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
			$(A[2]).html(data);
			$(A[2]).attr("value","0");
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
			$(A[3]).html(data);
			$(A[3]).attr("value","0");
		}

	});		
	
	$.ajax({                                  //Para sacar los puntajes dependiendo de la dificultad escogida
		
		url: "../programs/Puntaje.php",
		
		data:{
			Set: Set
		},
		type:"GET",
		dataType:"text",
		success: function(data)
		{
			if (chosen==1)
			{
				$("small").html(data*Loop);
			}
		}
		
		
	});
	
	if (chosen==1)
		Loop++;
	
	var puntaje= (Set*40*Loop);
	alert(puntaje);
});

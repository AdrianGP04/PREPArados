var Loop=0; //Checa la cantidad de veces que has respondido
var score=0; //Checa el puntaje

$("#START").click(function()
{
	alert("Has iniciado una partida");
	event.preventDefault();
	$("#Ninja").attr("class","");
	$("fieldset").attr("disabled","");
	$(".Answers").prop("disabled",false);
	$("#Title").html("Game On!");
	$("small").html("0");
	Loop=0;
	console.log("Inicio");

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
			var point=0;

			var Interval=setInterval(function(){
				if (x==0 || point>=15)            //Para cuando el juego acabe
				{
					$(".Answers").attr("disabled","on");
					$("fieldset").prop("disabled",false);
					$("#Title").html("Game Over");
					$("#Barra").attr("style","width:0%");
					clearInterval(Interval);
					console.log("Termino");
					$("#SeeYou").modal('toggle');
					/*$('#SeeYou').modal({
							backdrop: 'static',
							keyboard: false
					});*/
				}

				$("#Barra").attr("style","width:"+x+"%");
				x-=10;


			},(data)*100);

				$(".Answers").on("click", function(){
					x=100;
					point++;
					console.log(point);
					//console.log(score);
					console.log(Loop);
					if (point==15)
						$(".Answers").attr("disabled","on");
				});

				$("#Refresh").click(function()
				{
					location.reload();
				});

				$("#Submit").click(function()
				{
					alert(Set*40*Loop);
					$.ajax({
						url: "../programs/registrar_puntaje.php",
						data:{
							Score: Set*40*Loop,
							Success: Loop
						},
						type:"GET",
						dataType:"text",
						success: function(data)
						{
							location.reload();
						}



						});
				});
			}





	});


	var random= 0;          //Este número depende de la cantidad de preguntas que haya
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

	var A= ["#A1","#A2","#A3","#A4"];      //Acomoda las respuestas
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









	$(".Answers").on("click", function()      //Para cuando el juego empieza
	{
			event.preventDefault();
			var Set= $(".Set:checked").val();
			var chosen=$(this).val();
			random++;
			var section= 0;
			console.log("Contestate");
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
						$("#ScoreShow").html(data*Loop);
					}
				}


			});


			if (chosen==1)
				Loop++;

			var score= (Set*40*Loop);

			console.log(score);
			//console.log(Loop);


		});

});



$(document).ready(function(){
			var ctx = $('#mycanvas').get(0).getContext("2d");

			var data = {
					datasets: [{
							data: [
								180,
								180

							],
							backgroundColor: [
								"#99ff66",  //green
								"#ff8080"
							],
							label: 'My dataset' // for legend
					}],
					labels: [
						"Respuestas que has tenido correctas",
						"Respuestas que has tenido incorrectas"

					]
				};
						//Dibujar
				var piechart = new Chart(ctx, {
						type: 'polarArea',
						data: data,
				});


});

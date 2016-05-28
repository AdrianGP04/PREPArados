<?php
	$Preguntas = array(
        array('¿Cual es el primer planeta del sistema solar?', 'mercurio', 'jupiter', 'tierra', 'sol'),
        array('¿Quien es el presidente de Mexico?', 'Enrique Pena nieto', 'Wayne Rooney', 'Barack Obama', 'Donald Trump'),
        array('¿Cual es el simbolo del oro en la tabla periodica?', 'AU', 'H', 'O', 'K'),
        array('¿Cuanto es 2x2?', '4', '5', '12', '3'),
        array('¿Cual de estos es un lenguaje de programación?', 'C', 'html', 'bootstrap', 'kernel'),
		array('¿Cual es el animal más peligroso del mar?', 'El tiburón', 'La ballena', 'El pulpo', 'La tortuga'),
		array('¿En la escala del PH, 10 qué es?', 'Una base', 'Una mezcla', 'Un número', 'Un ácido'),
		array('¿En que contienente esta México?', 'América', 'Oceania', 'Africa', 'Asia'),
		array('¿Quién fue Melchor Ocampo?', 'Un pensador', 'Un rebelde', 'Un presidente', 'Un principe'),
		array('¿En que año surgio la 2da Guerra Mundial?', '1939', '1942', '1921', '1945'),
		array('¿Quién conquisto Tenochtitlan?', 'Cortez', 'Napoleon', 'Peña Nieto', 'Colón'),
		array('¿Qué es positrón?', 'una particula elemental', 'un artefacto', 'un planeta', 'una molecula'),
		array('¿Qué es H?', 'Hidrogeno', 'Helio', 'Hidróxido', 'Hulie'),
		array('¿Qué valores tiene un bit?', '1 y 0', '1-9', 'Todos los E', 'Ninguno'),
		array('¿Qué estudia la Biología?', 'A los seres vivos', 'La composición atómica', 'A los animales', 'A los vegetales'),
		array('¿Quién es Tezcatlipoca?', 'El dios del espejo humeante', 'El dios del rayo', 'El dios de la muerte', 'El dios del agua')
      );
	  
	 $random= $_GET['Random'];
	 $section= $_GET['Section'];
	 
	 echo $Preguntas[$random][$section];



?>
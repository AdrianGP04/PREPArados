<?php
	$Preguntas = array(
        array('¿Cual es el primer planeta del sistema solar?', 'mercurio', 'jupiter', 'tierra', 'sol'),
        array('¿Quien es el presidente de Mexico?', 'Enrique Pena nieto', 'Wayne Rooney', 'Barack Obama', 'Donald Trump'),
        array('¿Cual es el simbolo del oro en la tabla periodica?', 'AU', 'H', 'O', 'K'),
        array('¿Cuanto es 2x2?', '4', '5', '12', '3'),
        array('¿Cual de estos es un lenguaje de programación?', 'C', 'html', 'bootstrap', 'kernel')
      );
	  
	 $random= $_GET['Random'];
	 $section= $_GET['Section'];
	 
	 echo $Preguntas[$random][$section];



?>
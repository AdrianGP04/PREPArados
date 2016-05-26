<?php

	$Mode=$_GET['Mode'];
	$Set=$_GET['Set'];

	if ($Mode == 1)
		$x= "Solo";
	elseif ($Mode==2)
		$x= "Versus";
	elseif ($Mode==3)
		$x= "Glory";

	if ($Set==1)
	{
		$y= "Fácil";
		$T= 25;
	}
	elseif ($Set==2)
	{
		$y= "Medio";
		$T= 18;
	}
	elseif ($Set==3)
	{
		$y= "Difícil";
		$T= 12;
	}

	echo 'El modo de juego que escogiste fue '.$x.' y la dificultad que pusiste fue '.$y.', tienes un total de '.$T.' segundos';



?>

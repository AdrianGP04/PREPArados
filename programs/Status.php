<?php

	$Mode=$_GET['Mode'];
	$Set=$_GET['Set'];
	
	$Time= array(
		array('Fácil',20),
		array('Medio',15),
		array('Difícil',7),
	);
	
	if ($Mode == 1)
		$x= "Solo";
	elseif ($Mode==2)
		$x= "Versus";
	elseif ($Mode==3)
		$x= "Glory";
	
		
	echo $Time[($Set)-1][1];

?>
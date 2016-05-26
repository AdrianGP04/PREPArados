<?php

	$Mode=$_GET['Mode'];
	$Set=$_GET['Set'];
	
	$Time= array(
		array('Fácil',25),
		array('Medio',18),
		array('Difícil',12),
	);
	
	if ($Mode == 1)
		$x= "Solo";
	elseif ($Mode==2)
		$x= "Versus";
	elseif ($Mode==3)
		$x= "Glory";
	
		
	echo $Time[($Set)-1][1];

?>
<?php
	$Set=$_GET['Set'];
	
	$Score= array(
		array('Fácil',40),
		array('Medio',80),
		array('Difícil',120),
	);
	
	echo $Score[($Set)-1][1];

?>
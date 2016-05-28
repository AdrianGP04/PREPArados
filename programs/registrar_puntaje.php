<?php
	session_start();
	$id= $_SESSION["ID"];
	$C= $_GET['Score'];
	
	include("conexion.php");
	$con = mysqli_connect($dbHost, $dbUser, $dbPassword, "PREPArados") or die("Problemas con el servidor");
	mysqli_select_db($con, "PREPArados") or die ("Problemas al conectar la base de datos");
	$score= mysqli_real_escape_string($con, $_GET['Score']);
	$Correction= 15 - ($_GET['Success']); //Este valor varia de cuantas preguntas se hagan
	$Right= mysqli_real_escape_string($con, $_GET['Success']);
	$Wrong= mysqli_real_escape_string($con, $Correction);
	
	mysqli_query($con,"UPDATE USUARIOS SET puntaje='$score', Prom_RC='$Right',Prom_RI='$Wrong' WHERE USER_NOCT ='$id' ");
	
	
?>	
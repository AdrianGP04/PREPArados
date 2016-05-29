<?php	
	session_start();
	
	$id=$_SESSION["ID"];
	
	$GET=$_GET['Correct'];
	
	include("conexion.php");
	$con = mysqli_connect($dbHost, $dbUser, $dbPassword, "PREPArados") or die("Problemas con el servidor");
	mysqli_select_db($con, "PREPArados") or die ("Problemas al conectar la base de datos");
	$Me= "SELECT * FROM USUARIOS WHERE USER_NOCT ='$id'";
	$Extract=mysqli_query($con, $Me);
	while($row = mysqli_fetch_assoc($Extract)){
								
		$Correct=$row['Prom_RC'];
	}
	$Graph_RC=$Correct;
	$GET= $GET+$Graph_RC;
	
	echo $GET;
	
	
	
?>
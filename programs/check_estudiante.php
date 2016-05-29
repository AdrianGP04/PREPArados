<?php
	session_start();
	if(!isset($_SESSION["ID"]))
		echo "Error";
    else
        echo "Bienvenido alumno ".$_SESSION["name"];
?>

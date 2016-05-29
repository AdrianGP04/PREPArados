<?php
	session_start();
	if((!isset($_SESSION["ID"])) || ($_SESSION["name"] != "ENP 6"))
		echo "Error";
    else
        echo "Bienvenido administrador ".$_SESSION["name"];
?>

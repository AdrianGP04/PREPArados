<?php
    include("conexion.php");
    $con = mysqli_connect($dbHost, $dbUser, $dbPassword, "PREPArados") or die("Problemas con el servidor");
    mysqli_select_db($con, "PREPArados") or die ("Problemas al conectar la base de datos");
    mysqli_query ($con, "SET NAMES 'utf8'");
    $visita = mysqli_fetch_assoc(mysqli_query($con, "SELECT SIT_VISIT FROM SITIO WHERE SIT_NOM = 'PREPArados'"));
    $visita["SIT_VISIT"]++;
    mysqli_query($con, "UPDATE SITIO SET SIT_VISIT = '$visita[SIT_VISIT]' WHERE SIT_NOM = 'PREPArados'");
?>

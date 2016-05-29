<?php
        include("conexion.php");
        $con = mysqli_connect($dbHost, $dbUser, $dbPassword, "PREPArados") or die("Problemas con el servidor");
        mysqli_select_db($con, "PREPArados") or die ("Problemas al conectar la base de datos");
        mysqli_query ($con, "SET NAMES 'utf8'");
        $countUsers = mysqli_fetch_assoc(mysqli_query($con, "SELECT COUNT(*) AS CONTEO FROM USUARIOS"));
        $countProf = mysqli_fetch_assoc(mysqli_query($con, "SELECT COUNT(*) AS CONTEO FROM PROFESOR"));
        $countCoord = mysqli_fetch_assoc(mysqli_query($con, "SELECT COUNT(*) AS CONTEO FROM COORDINADOR"));
        $countAdmin = mysqli_fetch_assoc(mysqli_query($con, "SELECT COUNT(*) AS CONTEO FROM ADMINISTRADOR"));
        $countPreg = mysqli_fetch_assoc(mysqli_query($con, "SELECT COUNT(*) AS CONTEO FROM PREGUNTA"));
        mysqli_query($con, "UPDATE SITIO SET SIT_ALUMN = '$countUsers[CONTEO]' WHERE SIT_NOM = 'PREPArados'");
        mysqli_query($con, "UPDATE SITIO SET SIT_PROF = '$countProf[CONTEO]' WHERE SIT_NOM = 'PREPArados'");
        mysqli_query($con, "UPDATE SITIO SET SIT_COORD = '$countCoord[CONTEO]' WHERE SIT_NOM = 'PREPArados'");
        mysqli_query($con, "UPDATE SITIO SET SIT_ADMIN = '$countAdmin[CONTEO]' WHERE SIT_NOM = 'PREPArados'");
        mysqli_query($con, "UPDATE SITIO SET SIT_PREG = '$countPreg[CONTEO]' WHERE SIT_NOM = 'PREPArados'");
?>

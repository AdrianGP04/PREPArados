<?php
    if(isset($_POST["pregunta"]) && !empty($_POST["pregunta"])){
        include("conexion.php");
        $con = mysqli_connect($dbHost, $dbUser, $dbPassword, "PREPArados") or die("Problemas con el servidor");
        mysqli_select_db($con, "PREPArados") or die ("Problemas al conectar la base de datos");
        $pregunta = mysqli_real_escape_string($con, $_POST["pregunta"]);
        mysqli_query ($con, "SET NAMES 'utf8'");
        mysqli_query($con,"DELETE FROM PREGUNTA WHERE PREG_ID = '$pregunta'");
        echo "SUCCESS";
    }
    else
        echo "ERROR: CAMPOS";
?>

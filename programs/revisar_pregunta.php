<?php
    if(isset($_POST["id"]) && !empty($_POST["id"])){
        include("conexion.php");
        $con = mysqli_connect($dbHost, $dbUser, $dbPassword, "PREPArados") or die("Problemas con el servidor");
        mysqli_select_db($con, "PREPArados") or die ("Problemas al conectar la base de datos");
        $id = mysqli_real_escape_string($con, $_POST["id"]);
        mysqli_query($con, "SET NAMES 'utf8'");
        mysqli_query($con, "UPDATE PREGUNTA SET PREG_REV = 1 WHERE PREG_ID = '$id'");
    }
?>

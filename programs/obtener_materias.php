<?php
    session_start();
    include("conexion.php");
    $con = mysqli_connect($dbHost,$dbUser,$dbPassword,"PREPArados") or die("Problemas con el servidor");
    mysqli_select_db($con,"PREPArados") or die ("Problemas al conectar la base de datos");
    mysqli_query ($con, "SET NAMES 'utf8'");
    $area_extraido = mysqli_query($con, "SELECT MAT_NAME FROM MATERIAS WHERE MAT_COL = '$_SESSION[COL]'");
    while ($row = mysqli_fetch_assoc($area_extraido)){
        echo "<option class='col' value='".$row["MAT_NAME"]."'> ".$row["MAT_NAME"]." </option>";
    }
?>
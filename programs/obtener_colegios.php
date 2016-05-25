<?php
    include("conexion.php");
    $con = mysqli_connect($dbHost,$dbUser,$dbPassword,"PREPArados") or die("Problemas con el servidor");
    mysqli_select_db($con,"PREPArados") or die ("Problemas al conectar la base de datos");
    $area = mysqli_real_escape_string($con, $_POST["area"]);
    mysqli_query ($con, "SET NAMES 'utf8'");
    $area_extraido = mysqli_query($con, "SELECT COL_NAME FROM COLEGIOS WHERE AREA_ID = '$area' ");
    while ($row = mysqli_fetch_assoc($area_extraido)){
        echo "<option class='col' value='".$row["COL_NAME"]."'> ".$row["COL_NAME"]." </option>";
    }
?>

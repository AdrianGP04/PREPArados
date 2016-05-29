<?php
    session_start();
    /* Conexion */
    include("conexion.php");
    $con = mysqli_connect($dbHost,$dbUser,$dbPassword,"PREPArados") or die("Problemas con el servidor");
    mysqli_select_db($con,"PREPArados") or die ("Problemas al conectar la base de datos");
    mysqli_query ($con, "SET NAMES 'utf8'");
    if(isset($_POST["sesion"])){
        $area_extraido = mysqli_query($con, "SELECT MAT_NAME FROM MATERIAS WHERE COL_ID = '$_SESSION[COL]'");
        while ($row = mysqli_fetch_assoc($area_extraido)){
            echo "<option class='col' value='".$row["MAT_NAME"]."'> ".$row["MAT_NAME"]." </option>";
        }
    }
    else if(!isset($_POST["aprobar"])){
        $colegio = mysqli_real_escape_string($con, $_POST["colegio"]);
        $area_extraido = mysqli_query($con, "SELECT MAT_NAME FROM MATERIAS WHERE COL_ID = '$colegio'");
        while ($row = mysqli_fetch_assoc($area_extraido)){
            echo "<option class='mat' value='".$row["MAT_NAME"]."'> ".$row["MAT_NAME"]." </option>";
        }
        if(empty(mysqli_fetch_assoc($area_extraido))){
            echo "NO SUBJECTS";
        }

    }
    else {
        $colegio = mysqli_real_escape_string($con, $_POST["colegio"]);
        $colegio = mysqli_fetch_assoc(mysqli_query($con, "SELECT COL_ID FROM COLEGIOS WHERE COL_NAME = '$colegio'"));
        $area_extraido = mysqli_query($con, "SELECT MAT_NAME FROM MATERIAS WHERE COL_ID = '$colegio[COL_ID]'");
        while ($row = mysqli_fetch_assoc($area_extraido)){
            echo "<option class='mat' value='".$row["MAT_NAME"]."'> ".$row["MAT_NAME"]." </option>";
        }
        if(empty(mysqli_fetch_assoc($area_extraido))){
            echo "NO SUBJECTS";
        }
    }
?>

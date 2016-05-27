<?php
    if( (isset($_POST["TipoUsuario"]) && isset($_POST["EliminarUsuario"])) && (!empty($_POST["TipoUsuario"]) && !empty($_POST["EliminarUsuario"])) ){
        include("conexion.php");
        $con = mysqli_connect($dbHost, $dbUser, $dbPassword, "PREPArados") or die("Problemas con el servidor");
        mysqli_select_db($con, "PREPArados") or die ("Problemas al conectar la base de datos");
        $name = mysqli_real_escape_string($con, $_POST["EliminarUsuario"]);
        $type = mysqli_real_escape_string($con, $_POST["TipoUsuario"]);
        mysqli_query ($con, "SET NAMES 'utf8'");
        if($type == "alumno"){
            mysqli_query($con,"DELETE FROM USUARIOS WHERE USER_NOCT = '$name'");
            echo "SUCCESS";
        }
        else if($type == "coordinador"){
            mysqli_query($con,"DELETE FROM COORDINADOR WHERE COORD_NAME = '$name'");
            echo "SUCCESS";
        }
        else if($type == "profesor"){
            mysqli_query($con,"DELETE FROM PROFESOR WHERE PROF_NAME = '$name'");
            echo "SUCCESS";
        }
    }
    else
        echo "ERROR: CAMPOS";
?>

<?php
    if(isset($_POST["ConsultaUsuario"]) && !empty($_POST["ConsultaUsuario"])){
/* Conexio */
        include("conexion.php");
        $con = mysqli_connect($dbHost,$dbUser,$dbPassword,"PREPArados") or die("Problemas con el servidor");
        mysqli_select_db($con,"PREPArados") or die ("Problemas al conectar la base de datos");
        $consulta = mysqli_real_escape_string($con, $_POST["ConsultaUsuario"]);
        $consulta .= "%";
        mysqli_query ($con, "SET NAMES 'utf8'");
/* Eliminacion de posibles sentencias SQL en los POSTS */
        $admin_extraido = mysqli_fetch_assoc(mysqli_query($con, "SELECT ADMIN_NAME FROM ADMINISTRADOR WHERE ADMIN_NAME LIKE '$consulta' "));
        $coord_extraido = mysqli_fetch_assoc(mysqli_query($con, "SELECT COORD_NAME FROM COORDINADOR WHERE COORD_NAME LIKE '$consulta' "));
        $alumno_extraido = mysqli_fetch_assoc(mysqli_query($con,"SELECT USER_NOCT FROM USUARIOS WHERE USER_NOCT LIKE '$consulta' "));
        $profesor_extraido = mysqli_fetch_assoc(mysqli_query($con,"SELECT PROF_NAME FROM PROFESOR WHERE PROF_NAME LIKE '$consulta' "));
        if(isset($coord_extraido)){ /* Sistema de muestra si se encuentra un coordinador */
            echo "Quizas querias decir: ".$coord_extraido["COORD_NAME"];
        }
        elseif(isset($admin_extraido)){ /* Sistema de muestra si se encuentra un administrador */
            echo "Quizas querias decir: ".$admin_extraido["ADMIN_NAME"];
        }
        elseif(isset($alumno_extraido)){ /* Sistema de muestra si se encuentra un alumno */
            echo "Quizas querias decir: ".$alumno_extraido["USER_NOCT"];
        }
        elseif(isset($profesor_extraido)){ /* Sistema de muestra si se encuentra un profesor */
            echo "Quizas querias decir: ".$profesor_extraido["PROF_NAME"];
        }
        else
            echo "No se han encontrado resultados"; /* En caso de que no se hayan encontrado resultados */
    }
?>

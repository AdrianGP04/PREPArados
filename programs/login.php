<?php
    if((isset($_POST["numCuentaLogIn"]) && isset($_POST["passwordLogIn"])) && (!empty($_POST["numCuentaLogIn"]) && !empty($_POST["passwordLogIn"]))){
        include("conexion.php");
        $con = mysqli_connect($dbHost,$dbUser,$dbPassword,"PREPArados") or die("Problemas con el servidor");
        mysqli_select_db($con,"PREPArados") or die ("Problemas al conectar la base de datos");
        $nocta = mysqli_real_escape_string($con, $_POST["numCuentaLogIn"]);
        $password = mysqli_real_escape_string($con, $_POST["passwordLogIn"]);
        mysqli_query ($con, "SET NAMES 'utf8'");
        $admin_extraido = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM ADMINISTRADOR WHERE ADMIN_NAME = '$nocta' "));
        $coord_extraido = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM COORDINADOR WHERE COORD_NAME = '$nocta' "));
        $alumno_extraido = mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM USUARIOS WHERE USER_NOCT ='$nocta'"));
        $profesor_extraido = mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM PROFESOR WHERE PROF_NAME ='$nocta'"));
        if(isset($coord_extraido)){
            $cpassCoord = substr($coord_extraido["COORD_PASS"], 5, 40);
            if(sha1($password) == $cpassCoord){
                session_start();
                $_SESSION["ID"] = $coord_extraido["COORD_ID"];
                $_SESSION["name"] = $coord_extraido["COORD_NAME"];
                header("Location: ../perfil/coordinador.html");
            }
            else
                echo "ERROR: COORD";
        }
        elseif(isset($admin_extraido)){
            $cpassAdmin = substr($admin_extraido["ADMIN_PASS"], 5, 40);
            if(sha1($password) == $cpassAdmin){
                session_start();
                $_SESSION["ID"] = $admin_extraido["ADMIN_ID"];
                $_SESSION["name"] = $admin_extraido["ADMIN_NAME"];
                header("Location: ../perfil/administrador.html");
            }
            else
                echo "ERROR: ADMIN";
        }
        elseif(isset($alumno_extraido)){
            $cpass = substr($alumno_extraido["USER_PASS"], 5, 40);
            if(sha1($password) == $cpass){
                session_start();
                $_SESSION["ID"] = $alumno_extraido["USER_NOCT"];
                $_SESSION["name"] = $alumno_extraido["USER_NAME"];
                header("Location: ../perfil/estudiante.php");
            }
            else
                echo "ERROR: ALUMNO";
        }
        elseif(isset($profesor_extraido)){
            $cpassProf = substr($profesor_extraido["PROF_PASS"], 5, 40);
            if(sha1($password) == $cpassProf){
                session_start();
                $_SESSION["ID"] = $profesor_extraido["PROF_ID"];
                $_SESSION["name"] = $profesor_extraido["PROF_NAME"];
                $_SESSION["COL"] = $profesor_extraido["PROF_COL"];
                header("Location: ../perfil/profesor.html");
            }
            else
                echo "ERROR: PROF";
        }
        else
            echo "ERROR: REGISTRO";
    }
    else
        echo "ERROR: CAMPOS";
?>

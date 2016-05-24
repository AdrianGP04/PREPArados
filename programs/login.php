<?php
    if((isset($_POST["numCuentaLogIn"]) && isset($_POST["passwordLogIn"])) && (!empty($_POST["numCuentaLogIn"]) && !empty($_POST["passwordLogIn"]))){
        include("conexion.php");
        $con = mysqli_connect($dbHost,$dbUser,$dbPassword,"PREPArados") or die("Problemas con el servidor");
        mysqli_select_db($con,"PREPArados") or die ("Problemas al conectar la base de datos");
        $nocta = mysqli_real_escape_string($con, $_POST["numCuentaLogIn"]);
        $password = mysqli_real_escape_string($con, $_POST["passwordLogIn"]);
        mysqli_query ($con, "SET NAMES 'utf8'");
        $admin_extraido= mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM ADMINISTRADOR WHERE ADMIN_NAME = '$nocta' "));
        if(isset($admin_extraido["ADMIN_ID"])){
            $cpassAdmin = substr($admin_extraido["ADMIN_PASS"], 5, 40);
            if(sha1($password) == $cpassAdmin){
                session_start();
                $_SESSION["ID"] = $admin_extraido["ADMIN_ID"];
                $_SESSION["name"] = $admin_extraido["ADMIN_NAME"];
                header("Location: ../perfil/administrador.php");
            }
            else
                echo "ERROR: ADMIN";
        }
        $result = mysqli_query($con,"SELECT * FROM USUARIOS WHERE USER_NOCT ='$nocta'");
		$extraido = mysqli_fetch_assoc($result);
        if(isset($extraido["USER_NOCT"])){
            $cpass = substr($extraido["USER_PASS"], 5, 40);
            if(sha1($password) == $cpass){
                session_start();
                $_SESSION["ID"] = $extraido["USER_NOCT"];
                $_SESSION["name"] = $extraido["USER_NAME"];
                header("Location: ../perfil/estudiante.php");
            }
            else
                echo "ERROR: CONTRASEÑA";
        }
        else
            echo "ERROR: REGISTRO";
    }
    else
        echo "ERROR: CAMPOS";
?>

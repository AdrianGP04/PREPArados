<?php
/* Funcion para agregar la sal y la pimienta */
    function randomWord($num){
        $values = array("0","1","2","3","4","5","6","7","8","9","a","b","c","d","e","f","g","h","i","j","k","l",
                        "m","ñ","n","o","p","q","r","s","t","u","v","w","x","y","z");
        $randomWord = "";
        for($i = 0; $i < $num; $i++){
            $randomWord .= $values[rand(0,36)];
        }
        return $randomWord;
    }
    if((isset($_POST["profRegister"]) && isset($_POST["areaCoord"]) && isset($_POST["colegioCoord"]) && isset($_POST["passwordProfRegister"])
    && isset($_POST["passwordProfRegister2"])) && (!empty($_POST["profRegister"]) && !empty($_POST["areaCoord"]) && !empty($_POST["colegioCoord"])
    && !empty($_POST["passwordProfRegister"]) && !empty($_POST["passwordProfRegister2"]))){
        /* Conexion */
        include("conexion.php");
        $con = mysqli_connect($dbHost, $dbUser, $dbPassword, "PREPArados") or die("Problemas con el servidor");
        mysqli_select_db($con, "PREPArados") or die ("Problemas al conectar la base de datos");
        /* Eliminacion de sentencias SQL en los POSTS */
        $name = mysqli_real_escape_string($con, $_POST["profRegister"]);
        $area = mysqli_real_escape_string($con, $_POST["areaCoord"]);
        $colegio = mysqli_real_escape_string($con, $_POST["colegioCoord"]);
        $password = mysqli_real_escape_string($con, $_POST["passwordProfRegister"]);
        $password2 = mysqli_real_escape_string($con, $_POST["passwordProfRegister2"]);
        if($password == $password2){ /* En caso de que las contraseñas sean correctas */
            $checkuser = mysqli_num_rows(mysqli_query($con,"SELECT * FROM PROFESOR WHERE PROF_NAME = '$name'"));
            if($checkuser > 0) /* En caso de que el usuario ya exista */
                echo "ERROR: REGISTRADO";
            if($checkuser == 0){
                $colegio_extraido = mysqli_fetch_assoc(mysqli_query($con, "SELECT COL_ID FROM COLEGIOS WHERE COL_NAME = '$colegio'"));
                mysqli_query ($con, "SET NAMES 'utf8'");
                $cpass = randomWord(5).sha1($password).randomWord(5); /* Creacion de contraseña cifrada */
                mysqli_query($con,"INSERT INTO PROFESOR VALUES (DEFAULT, '$name','$cpass','$colegio_extraido[COL_ID]')");
            }
        }
        else
            echo "ERROR: CONTRASEÑA"; /* En caso de que las contrasñeas no coincidad */
    }
    else
        echo "ERROR: CAMPOS"; /* En caso de haber campos vacios */
?>

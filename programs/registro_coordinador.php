<?php
/* Función para agregar sal y pimienta */
    function randomWord($num){
        $values = array("0","1","2","3","4","5","6","7","8","9","a","b","c","d","e","f","g","h","i","j","k","l",
                        "m","ñ","n","o","p","q","r","s","t","u","v","w","x","y","z");
        $randomWord = "";
        for($i = 0; $i < $num; $i++){
            $randomWord .= $values[rand(0,36)];
        }
        return $randomWord;
    }
    if((isset($_POST["coordRegister"]) && isset($_POST["areaCoord"]) && isset($_POST["colegioCoord"]) && isset($_POST["passwordCoordRegister"])
    && isset($_POST["passwordCoordRegister2"])) && (!empty($_POST["coordRegister"]) && !empty($_POST["areaCoord"]) && !empty($_POST["colegioCoord"])
    && !empty($_POST["passwordCoordRegister"]) && !empty($_POST["passwordCoordRegister2"]))){
        /* Conexion a la base de datos */
        include("conexion.php");
        $con = mysqli_connect($dbHost, $dbUser, $dbPassword, "PREPArados") or die("Problemas con el servidor");
        mysqli_select_db($con, "PREPArados") or die ("Problemas al conectar la base de datos");
/* Eliminacion de posibles sentencias SQL en los POST */
        $name = mysqli_real_escape_string($con, $_POST["coordRegister"]);
        $area = mysqli_real_escape_string($con, $_POST["areaCoord"]);
        $colegio = mysqli_real_escape_string($con, $_POST["colegioCoord"]);
        $password = mysqli_real_escape_string($con, $_POST["passwordCoordRegister"]);
        $password2 = mysqli_real_escape_string($con, $_POST["passwordCoordRegister2"]);
        if($password == $password2){ /* Verificar si las contraseñas ingresadas son correctas */
            $checkuser = mysqli_num_rows(mysqli_query($con,"SELECT * FROM COORDINADOR WHERE COORD_NAME = '$name'"));
            if($checkuser > 0) /* Verificar si el usuario no esta registrado */
                echo "ERROR: REGISTRADO";
            if($checkuser == 0){
                $colegio_extraido = mysqli_fetch_assoc(mysqli_query($con, "SELECT COL_ID FROM COLEGIOS WHERE COL_NAME = '$colegio'"));
                mysqli_query ($con, "SET NAMES 'utf8'");
                $cpass = randomWord(5).sha1($password).randomWord(5); /* Creacion de la contraseña cifrada */
                mysqli_query($con,"INSERT INTO COORDINADOR VALUES (DEFAULT, '$name','$cpass','$area','$colegio_extraido[COL_ID]')");
            }
        }
        else
            echo "ERROR: CONTRASEÑA"; /* Contraseñas diferentes */
    }
    else
        echo "ERROR: CAMPOS"; /* Campos vacios */
?>

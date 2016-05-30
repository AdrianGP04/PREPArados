<?php
    function randomWord($num){
        $values = array("0","1","2","3","4","5","6","7","8","9","a","b","c","d","e","f","g","h","i","j","k","l",
                        "m","ñ","n","o","p","q","r","s","t","u","v","w","x","y","z");
        $randomWord = "";
        for($i = 0; $i < $num; $i++){
            $randomWord .= $values[rand(0,36)];
        }
        return $randomWord;
    }
    session_start();
    if((isset($_POST["password"]) && isset($_SESSION["type"])) && (!empty($_POST["password"])  && !empty($_SESSION["type"]))){
        include("conexion.php");
        $con = mysqli_connect($dbHost, $dbUser, $dbPassword, "PREPArados") or die("Problemas con el servidor");
        mysqli_select_db($con, "PREPArados") or die ("Problemas al conectar la base de datos");
        $password = mysqli_real_escape_string($con, $_POST["password"]);
        mysqli_query ($con, "SET NAMES 'utf8'");
        $cpass = randomWord(5).sha1($password).randomWord(5);
        if ($_SESSION["type"] == "coordinador")
            mysqli_query($con, "UPDATE COORDINADOR SET COORD_PASS = '$cpass' WHERE COORD_ID = '$_SESSION[ID]'");
        elseif ($_SESSION["type"] == "profesor")
            mysqli_query($con, "UPDATE PROFESOR SET PROF_PASS = '$cpass' WHERE PROF_ID = '$_SESSION[ID]'");
        elseif ($_SESSION["type"] == "alumno")
            mysqli_query($con, "UPDATE USUARIOS SET USER_PASS = '$cpass' WHERE USER_NOCT = '$_SESSION[ID]'");
    }
    else
        echo "ERROR: CAMPOS";
?>

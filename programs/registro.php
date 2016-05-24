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
    if((isset($_POST["userRegister"]) && isset($_POST["numCuentaRegister"]) && isset($_POST["passwordRegister"]) && isset($_POST["passwordRegister2"]))
    && (!empty($_POST["userRegister"]) && !empty($_POST["numCuentaRegister"]) && !empty($_POST["passwordRegister"]) && !empty($_POST["passwordRegister2"]))){
        include("conexion.php");
        $con = mysqli_connect($dbHost, $dbUser, $dbPassword, "PREPArados") or die("Problemas con el servidor");
        mysqli_select_db($con, "PREPArados") or die ("Problemas al conectar la base de datos");
        $name = mysqli_real_escape_string($con, $_POST["userRegister"]);
        $password = mysqli_real_escape_string($con, $_POST["passwordRegister"]);
        $password2 = mysqli_real_escape_string($con, $_POST["passwordRegister2"]);
        $nocta = mysqli_real_escape_string($con, $_POST["numCuentaRegister"]);
        if($password == $password2){
            $checkuser = mysqli_num_rows(mysqli_query($con,"SELECT * FROM USUARIOS WHERE USER_NOCT = '$nocta'"));
            if($checkuser > 0)
                echo "ERROR: REGISTRADO";
            if($checkuser == 0){
                mysqli_query ($con, "SET NAMES 'utf8'");
                $cpass = randomWord(5).sha1($password).randomWord(5);
                mysqli_query($con,"INSERT INTO USUARIOS VALUES ('$name','$nocta','$cpass')");
            }
        }
        else
            echo "ERROR: CONTRASEÑA";
    }
    else
        echo "ERROR: CAMPOS";
?>

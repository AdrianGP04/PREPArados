<?php
    if((isset($_POST["subject"]) && isset($_POST["question"]) && isset($_POST["c_Answer"])
    && isset($_POST["i_Answer1"]) && isset($_POST["i_Answer2"]) && isset($_POST["i_Answer3"]))
    && (!empty($_POST["subject"]) && !empty($_POST["question"]) && !empty($_POST["c_Answer"])
    && !empty($_POST["i_Answer1"]) && !empty($_POST["i_Answer2"]) && !empty($_POST["i_Answer3"]))){
        include("conexion.php");
        $con = mysqli_connect($dbHost, $dbUser, $dbPassword, "PREPArados") or die("Problemas con el servidor");
        mysqli_select_db($con, "PREPArados") or die ("Problemas al conectar la base de datos");
        $subject = mysqli_real_escape_string($con, $_POST["subject"]);
        $question = mysqli_real_escape_string($con, $_POST["question"]);
        $c_Answer = mysqli_real_escape_string($con, $_POST["c_Answer"]);
        $i_Answer1 = mysqli_real_escape_string($con, $_POST["i_Answer1"]);
        $i_Answer2 = mysqli_real_escape_string($con, $_POST["i_Answer2"]);
        $i_Answer3 = mysqli_real_escape_string($con, $_POST["i_Answer3"]);
        mysqli_query ($con, "SET NAMES 'utf8'");
        session_start();
        $materia = mysqli_fetch_assoc(mysqli_query($con , "SELECT MAT_ID FROM MATERIAS WHERE MAT_NAME = '$subject'"));
        mysqli_query($con,"INSERT INTO PREGUNTA VALUES (DEFAULT, '$materia[MAT_ID]','$question','$c_Answer','$i_Answer1', '$i_Answer2', '$i_Answer3', '$_SESSION[ID]', DEFAULT, DEFAULT,DEFAULT)");
        echo "string";
    }
    else
        echo "ERROR: CAMPOS";
?>

<?php
    if(isset($_POST["pregunta"])&& !empty($_POST["pregunta"])){
        include("conexion.php");
        $con = mysqli_connect($dbHost, $dbUser, $dbPassword, "PREPArados") or die("Problemas con el servidor");
        mysqli_select_db($con, "PREPArados") or die ("Problemas al conectar la base de datos");
        $id = mysqli_real_escape_string($con, $_POST["pregunta"]);
        $question = mysqli_real_escape_string($con, $_POST["questionMod"]);
        $c_Answer = mysqli_real_escape_string($con, $_POST["c_AnswerMod"]);
        $i_Answer1 = mysqli_real_escape_string($con, $_POST["i_Answer1Mod"]);
        $i_Answer2 = mysqli_real_escape_string($con, $_POST["i_Answer2Mod"]);
        $i_Answer3 = mysqli_real_escape_string($con, $_POST["i_Answer3Mod"]);
        mysqli_query ($con, "SET NAMES 'utf8'");
        if(!empty($question))
            mysqli_query($con, "UPDATE PREGUNTA SET PREG_TEXT = '$question' WHERE PREG_ID = '$id'");
        if(!empty($c_Answer))
            mysqli_query($con, "UPDATE PREGUNTA SET PREG_CORR = '$c_Answer' WHERE PREG_ID = '$id'");
        if(!empty($i_Answer1))
            mysqli_query($con, "UPDATE PREGUNTA SET PREG_INCUNO = '$i_Answer1' WHERE PREG_ID = '$id'");
        if(!empty($i_Answer2))
            mysqli_query($con, "UPDATE PREGUNTA SET PREG_INCDOS = '$i_Answer2' WHERE PREG_ID = '$id'");
        if(!empty($i_Answer3))
            mysqli_query($con, "UPDATE PREGUNTA SET PREG_INCTRES = '$i_Answer3' WHERE PREG_ID = '$id'");
        mysqli_query($con, "UPDATE PREGUNTA SET PREG_REV = 0 WHERE PREG_ID = '$id'");
    }
    else
        echo "ERROR: CAMPOS";
?>

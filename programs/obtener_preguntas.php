<?php
    include("conexion.php");
    $con = mysqli_connect($dbHost,$dbUser,$dbPassword,"PREPArados") or die("Problemas con el servidor");
    mysqli_select_db($con,"PREPArados") or die ("Problemas al conectar la base de datos");
    mysqli_query ($con, "SET NAMES 'utf8'");
    if(!isset($_POST["profesor"])){
        $materia = mysqli_real_escape_string($con, $_POST["materia"]);
        $materia_ID = mysqli_fetch_assoc(mysqli_query($con, "SELECT MAT_ID FROM MATERIAS WHERE MAT_NAME = '$materia'"));
        $preguntas_extraido = mysqli_query($con, "SELECT * FROM PREGUNTA WHERE PREG_MAT = '$materia_ID[MAT_ID]'");
        while ($preguntas = mysqli_fetch_assoc($preguntas_extraido)){
            $profesor = mysqli_fetch_assoc(mysqli_query($con, "SELECT PROF_NAME FROM PROFESOR WHERE PROF_ID = '$preguntas[PREG_PROF]'"));
            if($preguntas["PREG_APROB"] == "0")
            $estado = "<span id='num".$preguntas["PREG_ID"]."' class='no-approve' data-toggle='tooltip' data-placement='top' title='¿Aprobar?'> No aprobada </span>";
            else
            $estado = "<span class='approved'> Aprobada </span>";
            echo '
            <tbody class="tab-result">
            <tr>
            <td>'.$preguntas["PREG_ID"].'</td>
            <td>'.$preguntas["PREG_TEXT"].'</td>
            <td>'.$preguntas["PREG_CORR"].'</td>
            <td>'.$preguntas["PREG_INCUNO"].'</td>
            <td>'.$preguntas["PREG_INCDOS"].'</td>
            <td>'.$preguntas["PREG_INCTRES"].'</td>
            <td>'.$profesor["PROF_NAME"].'</td>
            <td>'.$preguntas["PREG_DATE"].'</td>
            <td>'.$estado.'</td>
            </tr>
            </tbody>';
        }
    }
    else {
        $materia = mysqli_real_escape_string($con, $_POST["materia"]);
        $materia_ID = mysqli_fetch_assoc(mysqli_query($con, "SELECT MAT_ID FROM MATERIAS WHERE MAT_NAME = '$materia'"));
        $preguntas_extraido = mysqli_query($con, "SELECT * FROM PREGUNTA WHERE PREG_MAT = '$materia_ID[MAT_ID]'");
        while ($preguntas = mysqli_fetch_assoc($preguntas_extraido)){
            if($preguntas["PREG_APROB"] == "0"){
                $estado = "<span class='no-approve'> No aprobada </span>";
                $modificar = '<button id="eli'.$preguntas["PREG_ID"].'" data-toggle="modal" data-target="#myModal" type="button" class="btn btn-link modify"> Modificar </button>';
                $eliminar = '<button id="mod'.$preguntas["PREG_ID"].'" data-toggle="modal" data-target="#preguntaDelete" type="button" class="btn btn-link delete"> Eliminar </button>';
            }
            else{
                $estado = "<span class='approved'> Aprobada </span>";
                $modificar = '<button type="button" class="btn btn-link" disabled="disabled"> Modificar </button>';
                $eliminar = '<button type="button" class="btn btn-link" disabled="disabled"> Eliminar </button>';
            }
            echo '
            <tbody class="tab-result">
            <tr>
            <td>'.$preguntas["PREG_ID"].'</td>
            <td>'.$preguntas["PREG_TEXT"].'</td>
            <td>'.$preguntas["PREG_CORR"].'</td>
            <td>'.$preguntas["PREG_INCUNO"].'</td>
            <td>'.$preguntas["PREG_INCDOS"].'</td>
            <td>'.$preguntas["PREG_INCTRES"].'</td>
            <td>'.$preguntas["PREG_DATE"].'</td>
            <td>'.$estado.'</td>
            <td>'.$modificar.'</td>
            <td>'.$eliminar.'</td>
            </tr>
            </tbody>';
        }
    }
?>

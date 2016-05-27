<?php
    include("conexion.php");
    $con = mysqli_connect($dbHost,$dbUser,$dbPassword,"PREPArados") or die("Problemas con el servidor");
    mysqli_select_db($con,"PREPArados") or die ("Problemas al conectar la base de datos");
    mysqli_query ($con, "SET NAMES 'utf8'");
    $materia = mysqli_real_escape_string($con, $_POST["materia"]);
    $materia_ID = mysqli_fetch_assoc(mysqli_query($con, "SELECT MAT_ID FROM MATERIAS WHERE MAT_NAME = '$materia'"));
    $preguntas_extraido = mysqli_query($con, "SELECT * FROM PREGUNTA WHERE PREG_MAT = '$materia_ID[MAT_ID]'");
    while ($preguntas = mysqli_fetch_assoc($preguntas_extraido)){
        $profesor = mysqli_fetch_assoc(mysqli_query($con, "SELECT PROF_NAME FROM PROFESOR WHERE PROF_ID = '$preguntas[PREG_PROF]'"));
        if($preguntas["PREG_APROB"] == "0")
            $estado = "<span style='color: red'> No aprobada </span>";
        else
            $estado = "<span style='color: green'> Aprobada </span>";
        echo '<thead class="tab-result">
          <tr>
            <th> ID </th>
            <th> Pregunta </th>
            <th> Respuesta correcta </th>
            <th> Respuesta incorrecta </th>
            <th> Respuesta incorrecta </th>
            <th> Respuesta incorrecta </th>
            <th> Profesor </th>
            <th> Fecha de registro </th>
            <th> Estado </th>
          </tr>
        </thead>
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
?>
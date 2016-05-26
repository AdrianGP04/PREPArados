<?php
    include("conexion.php");
    $con = mysqli_connect($dbHost,$dbUser,$dbPassword,"PREPArados") or die("Problemas con el servidor");
    mysqli_select_db($con,"PREPArados") or die ("Problemas al conectar la base de datos");
    mysqli_query ($con, "SET NAMES 'utf8'");
    $materia = mysqli_real_escape_string($con, $_POST["materia"]);
    $materia_extraido = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM MATERIAS WHERE MAT_NAME = '$materia'"));
    if(substr($materia_extraido["MAT_ID"],0,2) == "14")
        $mat_grado = "cuarto";
    elseif (substr($materia_extraido["MAT_ID"],0,2) == "15")
        $mat_grado = "quinto";
    elseif (substr($materia_extraido["MAT_ID"],0,2) == "16" || substr($materia_extraido["MAT_ID"],0,2) == "17")
        $mat_grado = "sexto";
    echo '<thead class="tab-result" id="planTable">
      <tr>
        <th> Clave </th>
        <th> Nombre </th>
        <th> Plan de estudios </th>
        <th> Descargar plan </th>
      </tr>
    </thead>
    <tbody class="tab-result">
      <tr>
        <td>'.$materia_extraido["MAT_ID"].'</td>
        <td>'.$materia_extraido["MAT_NAME"].'</td>
        <td> <a href="http://dgenp.unam.mx/planesdeestudio/'.$mat_grado.'/'.$materia_extraido["MAT_ID"].'.pdf" target="_blank"> Plan de estudios </a></td>
        <td> <a href="http://dgenp.unam.mx/planesdeestudio/'.$mat_grado.'/'.$materia_extraido["MAT_ID"].'.pdf" download> Descargar </a></td>
      </tr>
    </tbody>';
?>

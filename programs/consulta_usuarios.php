<?php
    if(isset($_POST["ConsultaUsuario"]) && !empty($_POST["ConsultaUsuario"])){
/* Conexio */
        include("conexion.php");
        $con = mysqli_connect($dbHost,$dbUser,$dbPassword,"PREPArados") or die("Problemas con el servidor");
        mysqli_select_db($con,"PREPArados") or die ("Problemas al conectar la base de datos");
        $consulta = mysqli_real_escape_string($con, $_POST["ConsultaUsuario"]);
        mysqli_query ($con, "SET NAMES 'utf8'");
/* Eliminacion de posibles sentencias SQL en los POSTS */
        $admin_extraido = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM ADMINISTRADOR WHERE ADMIN_NAME = '$consulta' "));
        $coord_extraido = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM COORDINADOR WHERE COORD_NAME = '$consulta' "));
        $alumno_extraido = mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM USUARIOS WHERE USER_NOCT ='$consulta'"));
        $profesor_extraido = mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM PROFESOR WHERE PROF_NAME ='$consulta'"));
        if(isset($coord_extraido)){ /* Sistema de muestra si se encuentra un coordinador */
            $colegio =  mysqli_fetch_assoc(mysqli_query($con, "SELECT COL_NAME FROM COLEGIOS NATURAL JOIN COORDINADOR WHERE COORD_ID = '$coord_extraido[COORD_ID]'"));
            $area = mysqli_fetch_assoc(mysqli_query($con, "SELECT AREA_NAME FROM AREAS NATURAL JOIN COLEGIOS WHERE COL_NAME = '$colegio[COL_NAME]'"));
            echo '<thead class="tab-result" id="coordinador">
              <tr>
                <th> ID </th>
                <th> Nombre del coordinador </th>
                <th> Área de estudio a la que pertenece </th>
                <th> Colegio al que pertenece </th>
                <th> Eliminar </th>
              </tr>
            </thead>
            <tbody class="tab-result">
              <tr>
                <td>'.$coord_extraido["COORD_ID"].'</td>
                <td>'.$coord_extraido["COORD_NAME"].'</td>
                <td>'.$area["AREA_NAME"].'</td>
                <td>'.$colegio["COL_NAME"].'</td>
                <td class="EliminarLink"> <span class="glyphicon glyphicon-remove"> </span> Eliminar usuario </td>
              </tr>
            </tbody>';
        }
        elseif(isset($admin_extraido)){ /* Sistema de muestra si se encuentra un administrador */
            echo '<thead class="tab-result">
              <tr>
                <th> ID </th>
                <th> Nombre del administrador </th>
              </tr>
            </thead>
            <tbody class="tab-result">
              <tr>
                <td>'.$admin_extraido["ADMIN_ID"].'</td>
                <td>'.$admin_extraido["ADMIN_NAME"].'</td>
              </tr>
            </tbody>';
        }
        elseif(isset($alumno_extraido)){ /* Sistema de muestra si se encuentra un alumno */
            echo '<thead class="tab-result" id="alumno">
              <tr>
                <th> Nombre de usuario </th>
                <th> Número de cuenta </th>
                <th> Eliminar </th>
              </tr>
            </thead>
            <tbody class="tab-result">
              <tr>
                <td>'.$alumno_extraido["USER_NAME"].'</td>
                <td>'.$alumno_extraido["USER_NOCT"].'</td>
                <td class="EliminarLink"> <span class="glyphicon glyphicon-remove"></span> Eliminar usuario </td>
              </tr>
            </tbody>';
        }
        elseif(isset($profesor_extraido)){ /* Sistema de muestra si se encuentra un profesor */
            $colegio =  mysqli_fetch_assoc(mysqli_query($con, "SELECT COL_NAME FROM COLEGIOS NATURAL JOIN PROFESOR WHERE PROF_ID = '$profesor_extraido[PROF_ID]'"));
            $area = mysqli_fetch_assoc(mysqli_query($con, "SELECT AREA_NAME FROM AREAS NATURAL JOIN COLEGIOS WHERE COL_NAME = '$colegio[COL_NAME]'"));
            echo '<thead class="tab-result" id="profesor">
              <tr>
                  <th> ID </th>
                  <th> Nombre del profesor </th>
                  <th> Área de estudio a la que pertenece </th>
                  <th> Colegio al que pertenece </th>
                  <th> Eliminar </th>
              </tr>
            </thead>
            <tbody class="tab-result">
              <tr>
                  <td>'.$profesor_extraido["PROF_ID"].'</td>
                  <td>'.$profesor_extraido["PROF_NAME"].'</td>
                  <td>'.$area["AREA_NAME"].'</td>
                  <td>'.$colegio["COL_NAME"].'</td>
                  <td class="EliminarLink"> <span class="glyphicon glyphicon-remove"> </span> Eliminar usuario </td>
              </tr>
            </tbody>';
        }
        else
            echo "ERROR: 404"; /* En caso de que no se hayan encontrado resultados */
    }
    else
        echo "ERROR: CAMPOS"; /* En caso de que haya campos vacios */
?>

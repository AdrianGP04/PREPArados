<?php
    if(isset($_POST["ConsultaUsuario"]) && !empty($_POST["ConsultaUsuario"])){
        include("conexion.php");
        $con = mysqli_connect($dbHost,$dbUser,$dbPassword,"PREPArados") or die("Problemas con el servidor");
        mysqli_select_db($con,"PREPArados") or die ("Problemas al conectar la base de datos");
        $consulta = mysqli_real_escape_string($con, $_POST["ConsultaUsuario"]);
        mysqli_query ($con, "SET NAMES 'utf8'");
        $admin_extraido = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM ADMINISTRADOR WHERE ADMIN_NAME = '$consulta' "));
        $coord_extraido = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM COORDINADOR WHERE COORD_NAME = '$consulta' "));
        $alumno_extraido = mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM USUARIOS WHERE USER_NOCT ='$consulta'"));
        if(isset($coord_extraido)){
                echo $coord_extraido["COORD_ID"], $coord_extraido["COORD_NAME"], $coord_extraido["COORD_AREA"], $coord_extraido["COORD_COL"];
        }
        elseif(isset($admin_extraido)){
                echo $admin_extraido["ADMIN_ID"], $admin_extraido["ADMIN_NAME"];
        }
        elseif(isset($alumno_extraido)){
            echo '<thead class="tab-result">
              <tr>
                <th>Nombre</th>
                <th>Número de cuenta</th>
              </tr>
            </thead>
            <tbody class="tab-result">
              <tr>
                <td>'.$alumno_extraido["USER_NAME"].'</td>
                <td>'.$alumno_extraido["USER_NOCT"].'</td>
              </tr>
            </tbody>';
                // echo = $alumno_extraido["USER_NOCT"], $alumno_extraido["USER_NAME"];
        }
        else
            echo "ERROR: 404";
    }
    else
        echo "ERROR: CAMPOS";
?>

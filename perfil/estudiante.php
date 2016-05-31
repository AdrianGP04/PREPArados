<?php
	session_start();
	if(!isset($_SESSION))
	{
		header("../index.html");
	}

?>

<!DOCTYPE html>
<html>
	<head>
		<title> Estudiante | Menu </title>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <link type="image/x-icon" href="../resources/favicon.ico" rel="icon" />
        <script src="../bootstrap/js/jquery.min.js"> </script>
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <script src="../bootstrap/js/bootstrap.min.js"> </script>
		<!-- <script src="../js/jquery-2.2.3.js"> </script> -->
		<script type="text/javascript" src="../js/Chart.js"> </script>
		<script src="../js/estudiante.js"> </script>
	</head>
	<body>
		<div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-md-12 col-lg-12">
                    <header>
                        <img src="../resources/header.png" width="100%"/>
                    </header>
                </div>
            </div>
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bsnavbarcollapse1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"> </span>
							<span class="icon-bar"> </span>
							<span class="icon-bar"> </span>
						</button>
						<span id="saludo" class="navbar-brand" href="#" disabled> </span>
					</div>
					<div class="hidden-xs">
						<ul class="nav navbar-nav navbar-right">
							<li class="dropdown pull-right">
								<a class="dropdown-toggle" data-toggle="dropdown" href="#"> <span class="glyphicon glyphicon-user"> </span> Mi cuenta <span class="caret"> </span> </a>
								<ul class="dropdown-menu">
									<li class="dropdown-header"> Configuraciones <span class="glyphicon glyphicon-cog"> </span> </li>
									<li> <a data-toggle="modal" data-target="#modalName"> Cambiar nombre  </a> </li>
									<li> <a data-toggle="modal" data-target="#modalPassword"> Cambiar contraseña  </a> </li>
									<li role="separator" class="divider"> </li>
									<li> <a href="../programs/cerrar.php"> Salir de mi cuenta <span class="glyphicon glyphicon-log-out"> </span> </a> </li>
								</ul>
							</li>
						</ul>
					</div>
					<div class="collapse navbar-collapse" id="bsnavbarcollapse1">
						<ul class="nav navbar-nav navbar-right visible-xs">
							<li> <a data-toggle="modal" data-target="#modalName"> Cambiar nombre  </a> </li>
							<li> <a data-toggle="modal" data-target="#modalPassword"> Cambiar contraseña  </a> </li>
							<li> <a href="../programs/cerrar.php"> Salir de mi cuenta <span class="glyphicon glyphicon-log-out"> </span> </a> </li>
	                    </ul>
					</div>
				</div>
			</nav>
			<ul class="nav nav-tabs" role="tablist">
				<li role="presentation" class="active" id="Intro"> <a href="#Game" role="tab" data-toggle="tab"> Juego <span class="glyphicon glyphicon-knight"> </span> </a> </li>
				<li role="presentation"> <a href="#Boards" role="tab" data-toggle="tab"> Marcadores <span class="glyphicon glyphicon-stats"> </span> </a> </li>
				<li role="presentation"> <a href="#CheckOn" role="tab" data-toggle="tab"> Diagnóstico <span class="glyphicon glyphicon-education"> </span> </a> </li>
				<li role="presentation" id="ShowTime"> <a href="#Match" role="tab" data-toggle="tab" class="hidden" id="Ninja"> Partida <span class="glyphicon glyphicon-tower"> </span> </a> </li>
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#"> <span class="glyphicon glyphicon-tint"> </span> Cambiar colores <span class="caret"> </span> </a>
					<ul class="dropdown-menu">
						<li>
							<div class="form-group">
								<input type="color" class="form-control" value="#4dff4d" id="Color">
							</div>
						</li>
					</ul>
				 </li>
			</ul>
			<div class="tab-content">
				<div role="tabpanel" class="tab-pane active" id="Game">
					<section>
						<div class="container">
							<form class="form-inline" role="form" align="center" id="GameSet" action="#" method="POST">
								<fieldset>
									<div class="form-group">
										<label for="GameMode"> <h2> Modo de juego </h2> </label> <br/>
										<label class="radio-inline"> <input type="radio" name="GameMode" value="1" class="Mode"> Un solo jugador <span class="glyphicon glyphicon-user" style="color:green"> </span> </label>
										<label class="radio-inline"> <input type="radio" name="GameMode" value="2" class="Mode">Versus <span class="glyphicon glyphicon-user" style="color:red"> </span> <span class="glyphicon glyphicon-user" style="color:blue"> </span> </label>
										<label class="radio-inline"> <input type="radio" name="GameMode" value="3" class="Mode">For glory <span class="glyphicon glyphicon-user" style="color:green"> </span> <span class="glyphicon glyphicon-globe" style="color:red"> </span> </label>
									</div> <br/> <br/>
									<div class="form-group">
										<label for="Theme"> <h3> Escoge la asignatura o asignaturas que quieras jugar <br/> <small> (Para escoger varias asignaturas presiona la tecla Control o Shift) </small> <br/></h3> </label> <br/>
										<select multiple name="Theme" class="form-control">
											<option value="1"> Física </option>
											<option value="2">Informatica</option>
											<option value="3">Matematicas</option>
											<option value="4">Biologia</option>
											<option value="5">Educacion Fisica </option>
											<option value="6">Morfologia, Fisiologia y Salud</option>
											<option value="7">Orientacion Educativa</option>
											<option value="8">Psicologia e Higiene Mental</option>
											<option value="9">Quimica</option>
											<option value="10">Ciencias Sociales</option>
											<option value="11">Geografia</option>
											<option value="12">Historia</option>
											<option value="13">Aleman</option>
											<option value="14">Artes Plasticas</option>
											<option value="15">Danza</option>
											<option value="16">Dibujo y Modelado</option>
											<option value="17">Filosofia</option>
											<option value="18">Frances</option>
											<option value="19">Ingles</option>
											<option value="20">Italiano</option>
											<option value="21">Letras Clasicas</option>
											<option value="22">Literatura</option>
											<option value="23">Musica</option>
											<option value="24">Teatro</option>
											<option value="25">Produccion Editorial</option>
										</select>
									</div> <br/> <br/>
									<div class="form-group">
										<label for="Setting"> <h3> Escoge la difícultad que quieras </h3> </label> <br/>
										<label class="radio-inline"> <input type="radio" name="Setting" class="Set" value="1"> Fácil <span class="glyphicon glyphicon-pawn" style="color:black"> </span> </label>
										<label class="radio-inline"> <input type="radio" name="Setting" class="Set" value="2"> Medio <span class="glyphicon glyphicon-bishop" style="color:black"> </span> </label>
										<label class="radio-inline"> <input type="radio" name="Setting" class="Set" value="3"> Difícil <span class="glyphicon glyphicon-king" style="color:black"> </span> </label>
									</div> <br/> <br/>
									<div class="form-group" >
										<input type="submit" id="START" class="btn btn-lg btn-success" value="Start" >
									</div>
								</fieldset>
							</form>
						</div>
					</section>
				</div>
				<div role="tabpanel" class="tab-pane" id="Boards">
					<section>
						<h2 class="text-center"> Marcadores: </h2>

						<table class="table table-bordered table-hover">
							<tr class="active">
								<th> # </th>
								<th> Usuario </th>
								<th> Puntaje </th>
							</tr>
							<?php

							include("../programs/conexion.php");
							$con = mysqli_connect($dbHost, $dbUser, $dbPassword, "PREPArados") or die("Problemas con el servidor");
							mysqli_select_db($con, "PREPArados") or die ("Problemas al conectar la base de datos");

							$Top= "SELECT * FROM USUARIOS ORDER BY puntaje DESC LIMIT 10";
							$Extract=mysqli_query($con, $Top);
							$x=1;
							while($row = mysqli_fetch_assoc($Extract)){
								echo '<tr> <td>'.$x.'</td>';
								echo '<td>'.$row['USER_NAME'].'</td>';
								echo '<td>'.$row['puntaje'].'</td> </tr>';
								$x++;
							}

							?>
						</table>

						<h2 class="text-center"> Tú </h2>

						<table class="table table-bordered table-hover">
							<tr class="active">
								<th> Usuario </th>
								<th> Puntaje </th>
							</tr>
							<?php

							$id=$_SESSION["ID"];

							$Me= "SELECT * FROM USUARIOS WHERE USER_NOCT ='$id'";
							$Extract=mysqli_query($con, $Me);
							while($row = mysqli_fetch_assoc($Extract)){
								echo '<tr> <td>'.$row['USER_NAME'].'</td>';
								echo '<td>'.$row['puntaje'].'</td> </tr>';
								$x++;
							}

							?>
						</table>



					</section>
				</div>
				<div role="tabpanel" class="tab-pane" id="CheckOn">
					<section>
						<h2 class="text-center"> <?php echo $_SESSION["name"]; ?>, tus resultados son estos </h2>
						<div width="50px" height="50px">
							<canvas id="mycanvas"> </canvas>
						</div>
					</section>
				</div>
				<div role="tabpanel" class="tab-pane" id="Match"> <br/>
					<section>
						<div class="container">
							<div class="well" style="width:300; height:150" id="Status">
								<div class="row">
									<div class="col-md-3">
										<h2 id="Title" > Game On!</h2>
									</div>
									<div class="col-md-3">
										<h2>Puntaje: <small id="Score"> 0 </small> </h2>
									</div>
									<div class="col-md-3">
										<h2 id="ShowMode" class="text-center"> ... </h2>
									</div>
								</div>
							</div>
						</div>
						<div class="jumbotron">
							<div class="row">
								<div class="col-md-5">
									<img src="../resources/Logo_P6.png" width="280" height="280">
								</div>
								<div class="col-md-7">
									<h2 class="text-center" id="Question"> Pregunta </h2>
									<button class="btn btn-block btn-warning Answers" id="A1" value="0"> Respuesta 1 </button>
									<button class="btn btn-block btn-warning Answers" id="A2" value="0"> Respuesta 2 </button>
									<button class="btn btn-block btn-warning Answers" id="A3" value="0"> Respuesta 3 </button>
									<button class="btn btn-block btn-warning Answers" id="A4" value="0"> Respuesta 4 </button>
								</div>
							</div>
						</div>
						<h3 id="Status"> </h3>
						<h3> Tiempo: </h3>
						<div class="progress">
							<div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" style="width:0%" id="Barra">
								<span class="glyphicon glyphicon-time" style="color:black"> </span>
							</div>
						</div>
					</section>
				</div>
				<div class="modal fade" role="dialog" id="SeeYou" data-keyboard="false" data-backdrop="static">    <!-- Este modal aparece únicamente al terminar una partida -->
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title"> ¡Oh vaya, se acabo! </h4>
							</div>
							<div class="modal-body">
								<div class="row">
								<section>
									<div class="col-md-6">
										<div class="row">
											<p class="text-center"> ¡Se acabo el juego pero no hay de que temer! </p>
											<p class="text-center"> Tu puntación final fue: </p>
											<p id="ScoreShow" class="text-center"> ... </p>
										</div>
									</div>
									<div class="col-md-6">
										<button class="btn btn-block btn-warning" id="Submit"> Subir mi puntación </button>
										<button class="btn btn-block btn-danger" id="Refresh"> Volver a Intentarlo </button>
									</div>
								</section>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal fade" id="modalName" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
					<div class="modal-dialog" role="document" >
						<div class="modal-content" >
							<div data-trigger="focus"  id="modal-header-newName"  class="modal-header" >
								<button type="button" class="close" data-dismiss="modal" aria-label="Close" > <span aria-hidden="true" >&times;</span> </button>
								<h4 class="modal-title" id="myModalLabel" > Configuración del coordinador </h4>
							</div>
							<div class="modal-body" >
								<form id="ConfigurationName" autocomplete="off" >
									<div class="form-group" >
										<label for="newName" > Nuevo nombre </label>
										<input id="newName" data-trigger="focus" name="newUserName" type="text" class="form-control" placeholder="Nuevo nombre" >
									</div>
									<div class="form-group" >
										<label for="newName2" > Repetir nuevo nombre </label>
										<input id="newName2" data-trigger="focus" name="newUserName2" type="text" class="form-control" placeholder="Repetir nuevo nombre" >
										<br/>
									</div>
									<button id="configureName" type="submit" class="btn btn-default btn-block" > Cambiar nombre </button>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="modal fade" id="modalPassword" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
					<div class="modal-dialog" role="document" >
						<div class="modal-content" >
							<div data-trigger="focus"  id="modal-header-newPassword"  class="modal-header" >
									<button type="button" class="close" data-dismiss="modal" aria-label="Close" > <span aria-hidden="true" >&times;</span> </button>
									<h4 class="modal-title" id="myModalLabel" > Configuración del coordinador </h4>
							</div>
							<div class="modal-body" >
								<form id="ConfigurationPassword" autocomplete="off" >
									<div class="form-group" >
										<label for="newPassword" > Nueva contraseña </label>
										<input id="newPassword" data-trigger="focus" name="newUserPassword" type="password" class="form-control" placeholder="Nueva contraseña" >
									</div>
									<div class="form-group" >
										<label for="newPassword2" > Repetir nueva contraseña </label>
										<input id="newPassword2" data-trigger="focus" name="newUserPassword2" type="password" class="form-control" placeholder="Repetir nueva contraseña" >
										<br/>
										<span class="help" > <span class="glyphicon glyphicon-eye-close" > </span> Mostrar contraseñas </span>
									</div>
									<button id="configurePassword" type="submit" class="btn btn-default btn-block" > Cambiar contraseña </button>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div id="modalErrorServidor" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
					<div class="modal-dialog modal-sm">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
								<h4 class="modal-title" id="myModalLabel"> Error en la petición al servidor </h4>
							</div>
							<div class="modal-body">
								Ha ocurrido un error con el servidor
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-primary btn-block" data-dismiss="modal"> Cerrar </button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
	<script src="../js/Juego.js"> </script>
</html>

<?php
	session_start();
	if(!isset($_SESSION["ID"]))
	  	header("Location: ../");
?>
<!DOCTYPE html>
<html>
	<head>
		<title> Estudiante | Menu </title>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <link type="image/x-icon" href="../resources/favicon.ico" rel="icon" />
        <script src="../bootstrap/js/jquery.min.js"></script>
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <script src="../bootstrap/js/bootstrap.min.js"></script>
		<!-- <script src="../js/jquery-2.2.3.js"></script> -->
		<script type="text/javascript" src="../js/Chart.js"></script>
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
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<span class="navbar-brand" href="#" disabled> Bienvenido <?php echo $_SESSION["name"]; ?> </span>
					</div>
					<div class="hidden-xs">
						<ul class="nav navbar-nav navbar-right">
							<li class="dropdown pull-right">
								<a class="dropdown-toggle" data-toggle="dropdown" href="#"> <span class="glyphicon glyphicon-user"> </span> Mi cuenta <span class="caret"> </span> </a>
								<ul class="dropdown-menu">
									<li class="dropdown-header"> Configuraciones <span class="glyphicon glyphicon-cog"></span> </li>
									<li> <a data-toggle="modal" data-target="#modalName"> Cambiar nombre  </a> </li>
									<li> <a data-toggle="modal" data-target="#modalPassword"> Cambiar contraseña  </a> </li>
									<li role="separator" class="divider"></li>
									<li> <a href="../programs/cerrar.php"> Salir de mi cuenta <span class="glyphicon glyphicon-log-out"></span> </a> </li>
								</ul>
							</li>
						</ul>
					</div>
					<div class="modal fade" id="modalName" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	            <div class="modal-dialog" role="document">
	                <div class="modal-content">
	                    <div data-trigger="focus"  id="modal-header-newName"  class="modal-header">
	                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	                        <h4 class="modal-title" id="myModalLabel">Configuración de <?php echo $_SESSION["name"]; ?></h4>
	                    </div>
	                    <div class="modal-body">
	                        <form id="ConfigurationName" method="POST" action="./programs/configurarNombre.php" autocomplete="off">
	                            <div class="form-group">
	                                <label for="newName"> Nuevo nombre </label>
	                                <input id="newName" data-trigger="focus" name="newUserName" type="text" class="form-control" placeholder="Nuevo nombre">
	                            </div>
	                            <div class="form-group">
	                                <label for="newName2"> Repetir nuevo nombre </label>
	                                <input id="newName2" data-trigger="focus" name="newUserName2" type="text" class="form-control" placeholder="Repetir nuevo nombre">
	                                <br/>
															</div>
	                            <button id="configureName" type="submit" class="btn btn-default btn-block"> Cambiar nombre </button>
	                        </form>
	                    </div>
	                </div>
	            </div>
	        </div>
					<div class="modal fade" id="modalPassword" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
							<div class="modal-dialog" role="document">
									<div class="modal-content">
											<div data-trigger="focus"  id="modal-header-newPassword"  class="modal-header">
													<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
													<h4 class="modal-title" id="myModalLabel">Configuración de <?php echo $_SESSION["name"]; ?></h4>
											</div>
											<div class="modal-body">
													<form id="ConfigurationPassword" method="POST" action="./programs/configurarContra.php" autocomplete="off">
															<div class="form-group">
																	<label for="newPassword"> Nueva contraseña </label>
																	<input id="newPassword" data-trigger="focus" name="newUserPassword" type="text" class="form-control" placeholder="Nueva contraseña">
															</div>
															<div class="form-group">
																	<label for="newPassword2"> Repetir nueva contraseña </label>
																	<input id="newPassword2" data-trigger="focus" name="newUserPassword2" type="text" class="form-control" placeholder="Repetir nueva contraseña">
																	<br/>
															</div>
															<button id="configurePassword" type="submit" class="btn btn-default btn-block"> Cambiar contraseña </button>
													</form>
											</div>
									</div>
							</div>
					</div>
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right visible-xs">
                            <li> <a href="#"> Configuraciones <span class="glyphicon glyphicon-cog"></span> </a> </li>
                            <li> <a href="../programs/cerrar.php"> Salir de mi cuenta <span class="glyphicon glyphicon-log-out"></span> </a> </li>
	        	</ul>
					</div>
				</div>
			</nav>
			<ul class="nav nav-tabs" role="tablist">
				<li role="presentation" class="active" id="Intro"> <a href="#Game" role="tab" data-toggle="tab"> Juego <span class="glyphicon glyphicon-knight"></span> </a> </li>
				<li role="presentation"> <a href="#Boards" role="tab" data-toggle="tab"> Marcadores <span class="glyphicon glyphicon-stats"></span> </a> </li>
				<li role="presentation"> <a href="#CheckOn" role="tab" data-toggle="tab"> Diagnóstico <span class="glyphicon glyphicon-education"></span> </a> </li>
				<li role="presentation" id="ShowTime"> <a href="#Match" role="tab" data-toggle="tab" class="hidden" id="Ninja"> Partida <span class="glyphicon glyphicon-tower"></span> </a> </li>
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#"> <span class="glyphicon glyphicon-tint"></span> Cambiar colores <span class="caret"></span></a>
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
									<label class="radio-inline"><input type="radio" name="GameMode" value="1" class="Mode"> Un solo jugador <span class="glyphicon glyphicon-user" style="color:green"></span></label>
									<label class="radio-inline"><input type="radio" name="GameMode" value="2" class="Mode">Versus <span class="glyphicon glyphicon-user" style="color:red"></span> <span class="glyphicon glyphicon-user" style="color:blue"></span></label>
									<label class="radio-inline"><input type="radio" name="GameMode" value="3" class="Mode">For glory <span class="glyphicon glyphicon-user" style="color:green"></span> <span class="glyphicon glyphicon-globe" style="color:red"></span></label>
								</div> <br/> <br/>
								<div class="form-group">
									<label for="Theme"> <h3> Escoge la asignatura o asignaturas que quieras jugar </h3> </label> <br/>
									<div class="checkbox" name="Theme">
										<div class="row">
											<div class="col-md-3">
												<label><input type="checkbox" value="1" name="subject">Mate IV</label>
											</div>
											<div class="col-md-3">
												<label><input type="checkbox" value="2" name="subject">Mate V</label>
											</div>
											<div class="col-md-3">
												<label><input type="checkbox" value="3" name="subject">Mate VI</label>
											</div>
											<div class="col-md-3">
												<label><input type="checkbox" value="4" name="subject">Física</label>
											</div>
											<div class="col-md-3">
												<label><input type="checkbox" value="5" name="subject">Química</label>
											</div>
											<div class="col-md-3">
												<label><input type="checkbox" value="6" name="subject">Biología</label>
											</div>
											<div class="col-md-3">
												<label><input type="checkbox" value="7" name="subject">Ética</label>
											</div>
											<div class="col-md-3">
												<label><input type="checkbox" value="8" name="subject">Lógica</label>
											</div>
											<div class="col-md-3">
												<label><input type="checkbox" value="9" name="subject">Etimologías</label>
											</div>
											<div class="col-md-3">
												<label><input type="checkbox" value="10" name="subject">Salud</label>
											</div>
											<div class="col-md-3">
												<label><input type="checkbox" value="11" name="subject">Literatura</label>
											</div>
											<div class="col-md-3">
												<label><input type="checkbox" value="12" name="subject">Informática</label>
											</div>
										</div>
									</div>
								</div> <br/> <br/>
								<div class="form-group">
									<label for="Setting"> <h3> Escoge la difícultad que quieras </h3> </label> <br/>
									<label class="radio-inline"><input type="radio" name="Setting" class="Set" value="1"> Fácil <span class="glyphicon glyphicon-pawn" style="color:black"></span> </label>
									<label class="radio-inline"><input type="radio" name="Setting" class="Set" value="2"> Medio <span class="glyphicon glyphicon-bishop" style="color:black"></span> </label>
									<label class="radio-inline"><input type="radio" name="Setting" class="Set" value="3"> Difícil <span class="glyphicon glyphicon-king" style="color:black"></span> </label>
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
							
							$Top= "SELECT * FROM USUARIOS ORDER BY puntaje ASC LIMIT 10";
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
										<h2>Puntaje: <small> 0 </small> </h2>
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
									<p> Aquí va una imagen </p>
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
								<span class="glyphicon glyphicon-time" style="color:black"></span>
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
			</div>
		</div>
		<script src="../js/Juego.js"></script>
	</body>
</html>

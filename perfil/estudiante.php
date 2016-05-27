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
		<script src="../js/jquery-2.2.3.js"></script>
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
									<li> <a href="#"> Configuraciones <span class="glyphicon glyphicon-cog"></span> </a> </li>
									<li> <a href="../programs/cerrar.php"> Salir de mi cuenta <span class="glyphicon glyphicon-log-out"></span> </a> </li>
								</ul>
							</li>
						</ul>
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
							<h1 class="text-center"> Juego </h1>
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
									<input type="submit" id="Help" class="btn btn-lg btn-success" value="Start" >
								</div>
							</fieldset>
							</form>
						</div>
					</section>
				</div>
				<div role="tabpanel" class="tab-pane" id="Boards">
					<section>
						<h2 class="text-center"> Marcadores: </h2>
						<table class="table table-bordered table-hover table-responsive">
							<tr class="active">
								<th> # </th>
								<th> Usuario </th>
								<th> Puntaje </th>
							</tr>
							<tr>
								<td> 1 </td>
								<td> Mimicry </td>
								<td> 28121974 </td>
							</tr>
							<tr>
								<td> 2 </td>
								<td> Skull </td>
								<td> 18072008 </td>
							</tr>
							<tr>
								<td> 3 </td>
								<td> Noot </td>
								<td> 15602001 </td>
							</tr>
						</table> <br/> <br/>
						<table class="table table-bordered table-hover">
							<tr>
								<th> # </th>
								<th> Usuario </th>
								<th> Puntaje </th>
							</tr>
							<tr>
								<td> 100 </td>
								<td> <?php echo $_SESSION["name"]; ?> </td>
								<td> 000 </td>
							</tr>
						</table>
					</section>
				</div>
				<div role="tabpanel" class="tab-pane" id="CheckOn">
					<section>
						<h2> <?php echo $_SESSION["name"]; ?>, tus resultados son estos </h2>
					</section>
				</div>
				<div role="tabpanel" class="tab-pane" id="Match">
					<section>
						<div class="row">
							<div class="col-md-6">
								<h2 id="Title" > Game On!</h2>
							</div>
							<div class="col-md-6">
								<h2>Puntaje: <small> 0 </small> </h2> 
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
			</div>
		</div>
		<script src="../js/Juego.js"></script>
	</body>
</html>

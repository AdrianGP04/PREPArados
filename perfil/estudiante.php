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
				<li role="presentation" class="active"> <a href="#Game" role="tab" data-toggle="tab"> Juego <span class="glyphicon glyphicon-knight"></span> </a> </li>
				<li role="presentation"> <a href="#Boards" role="tab" data-toggle="tab"> Marcadores <span class="glyphicon glyphicon-stats"></span> </a> </li>
				<li role="presentation"> <a href="#CheckOn" role="tab" data-toggle="tab"> Diagnóstico <span class="glyphicon glyphicon-education"></span> </a> </li>
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
							<form class="form-inline" role="form" align="center">
								<div class="form-group">
									<label for="GameMode"> <h2> Modo de juego </h2> </label> <br/>
									<label class="radio-inline"><input type="radio" name="GameMode"> Un solo jugador <span class="glyphicon glyphicon-user" style="color:green"></span></label>
									<label class="radio-inline"><input type="radio" name="GameMode">Versus <span class="glyphicon glyphicon-user" style="color:red"></span> <span class="glyphicon glyphicon-user" style="color:blue"></span></label>
									<label class="radio-inline"><input type="radio" name="GameMode">For glory <span class="glyphicon glyphicon-user" style="color:green"></span> <span class="glyphicon glyphicon-globe" style="color:red"></span></label>
								</div> <br/> <br/>
								<div class="form-group">
									<label for="Theme"> <h3> Escoge la asignatura o asignaturas que quieras jugar </h3> </label> <br/>
									<div class="checkbox" name="Theme">
										<div class="row">
											<div class="col-md-3">
												<label><input type="checkbox" value="">Mate IV</label>
											</div>
											<div class="col-md-3">
												<label><input type="checkbox" value="">Mate V</label>
											</div>
											<div class="col-md-3">
												<label><input type="checkbox" value="">Mate VI</label>
											</div>
											<div class="col-md-3">
												<label><input type="checkbox" value="">Física</label>
											</div>
											<div class="col-md-3">
												<label><input type="checkbox" value="">Química</label>
											</div>
											<div class="col-md-3">
												<label><input type="checkbox" value="">Biología</label>
											</div>
											<div class="col-md-3">
												<label><input type="checkbox" value="">Ética</label>
											</div>
											<div class="col-md-3">
												<label><input type="checkbox" value="">Lógica</label>
											</div>
											<div class="col-md-3">
												<label><input type="checkbox" value="">Etimologías</label>
											</div>
											<div class="col-md-3">
												<label><input type="checkbox" value="">Salud</label>
											</div>
											<div class="col-md-3">
												<label><input type="checkbox" value="">Literatura</label>
											</div>
											<div class="col-md-3">
												<label><input type="checkbox" value="">Informática</label>
											</div>
										</div>
									</div>
								</div> <br/> <br/>
								<div class="form-group">
									<label for="Setting"> <h3> Escoge la difícultad que quieras </h3> </label> <br/>
									<label class="radio-inline"><input type="radio" name="GameMode"> Fácil <span class="glyphicon glyphicon-pawn" style="color:black"></span> </label>
									<label class="radio-inline"><input type="radio" name="GameMode"> Medio <span class="glyphicon glyphicon-bishop" style="color:black"></span> </label>
									<label class="radio-inline"><input type="radio" name="GameMode"> Difícil <span class="glyphicon glyphicon-king" style="color:black"></span> </label>
								</div> <br/> <br/>
								<div class="form-group">
									<button class="btn btn-lg btn-success"> Start </button>
								</div>
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
			</div>
		</div>
	</body>
</html>

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
						<h2> He aquí en donde irá el juego </h2>
					</section>
				</div>
				<div role="tabpanel" class="tab-pane" id="Boards">
					<section>
						<h2> He aquí en donde iran los marcadores </h2>
					</section>
				</div>
				<div role="tabpanel" class="tab-pane" id="CheckOn">
					<section>
						<h2> He aquí en donde irá el diagnóstico del jugador </h2>
					</section>
				</div>
			</div>
		</div>
	</body>
</html>
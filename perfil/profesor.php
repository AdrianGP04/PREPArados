<?php
	session_start();
	if(!isset($_SESSION["ID"]))
		header("Location: ../");
?>
<!DOCTYPE html>
<html>
	<head>
		<title> Profesor | Menu </title>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <link type="image/x-icon" href="../resources/favicon.ico" rel="icon" />
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <script src="../bootstrap/js/jquery.min.js"></script>
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
						<span class="navbar-brand" href="#" disabled> Bienvenido profesor <?php echo $_SESSION["name"]; ?> </span>
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
				<li role="presentation" class="active"> <a href="#Add" role="tab" data-toggle="tab"> Agregar Preguntas <span class="glyphicon glyphicon-pencil"></span> </a> </li>
				<li role="presentation"> <a href="#Check_Q" role="tab" data-toggle="tab"> Checar preguntas <span class="glyphicon glyphicon-search"></span> </a> </li>
				<li role="presentation"> <a href="#Check_S" role="tab" data-toggle="tab"> Diagnóstico de estudiantes <span class="glyphicon glyphicon-list-alt"></span> </a> </li>
			</ul>
			<div class="tab-content">
				<div role="tabpanel" class="tab-pane active" id="Add">
					<br/>
					<div class="row">
						<div class="col-lg-6">
							<section>
								<form id="RegisterFormCoord" method="POST" action="./programs/registro_pregunta.php" autocomplete="off">
									<div class="form-group">
										<label for="subject"> Seleccione la asignatura </label>
										<select id="subject" name="subject" class="form-control">
										</select>
									</div>
									<div class="form-group">
										<label for="question"> Introduzca una pregunta </label>
										<input id="question" type="text" name="question" placeholder="Pregunta" class="form-control">
									</div>
									<div class="form-group">
										<label for="subject"> Introduzca la respuesta correcta </label>
										<input id="c_Answer" type="text" name="c_Answer" placeholder="Respuesta correcta" class="form-control">
									</div>
									<div class="form-group">
										<label for="subject"> Introduzca respuestas incorrectas </label>
										<input id="i_Answer1" autocomplete=""type="text" name="i_Answer1" placeholder="Respuesta incorrecta" class="form-control">
									</div>
									<div class="form-group">
										<input id="i_Answer2" type="text" name="i_Answer2" placeholder="Respuesta incorrecta" class="form-control">
									</div>
									<div class="form-group">
										<input id="i_Answer3" type="text" name="i_Answer3" placeholder="Respuesta incorrecta" class="form-control">
									</div>
									<div class="form-group">
										<label for="q_Img"> Agregar una imagen a la pregunta </label>
										<input id="q_Img" type="file" name="q_Img" class="form-control">
									</div>
									<button id="QuestionRegisterSubmit" type="submit" class="btn btn-default btn-block"> Registrar pregunta </button>
								</form>
							</section>
						</div>
					</div>
				</div>
				<div role="tabpanel" class="tab-pane" id="Check_Q">
					<section>
						<h2> He aquí en donde iran las preguntas ya puestas </h2>
					</section>
				</div>
				<div role="tabpanel" class="tab-pane" id="Check_S">
					<section>
						<h2> He aquí en donde irá el diagnóstico de los jugadores</h2>
					</section>
				</div>
			</div>
		</div>
	</body>
	<script src="../js/profesor.js"></script>
</html>

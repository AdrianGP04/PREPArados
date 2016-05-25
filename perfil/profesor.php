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
									<li> <a href="#"> Salir de mi cuenta <span class="glyphicon glyphicon-log-out"></span> </a> </li>
								</ul>
							</li>
						</ul>
					</div>
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right visible-xs">
                            <li> <a href="#"> Configuraciones <span class="glyphicon glyphicon-cog"></span> </a> </li>
                            <li> <a href="#"> Salir de mi cuenta <span class="glyphicon glyphicon-log-out"></span> </a> </li>
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
					<section>
						<h2 class="text-center"> Agregue una pregunta </h2>
						<div class="container">
							<form class="form-horizontal">
								<div class="form-group">
									<label for="subject"> Seleccione la asignatura </label>
									<select name="subject" class="form-control">
										<option value="1"> Matemáticas IV </option>
										<option value="2"> Química </option>
										<option value="3"> Física </option>
										<option value="4"> Biología </option>
									</select>
								</div>
								<div class="form-group">
									<label for="Question"> Introduzca una pregunta </label>
									<input type="text" name="Question" placeholder="Introduce la pregunta que quieras aquí" class="form-control">
								</div>
								<div class="form-group">
									<label for="subject"> Introduzca la respuesta correcta </label>
									<input type="text" name="C_Answer" placeholder="Introduce aquí la respuesta correcta" class="form-control">
								</div>
								<div class="form-group">
									<label for="subject"> Introduzca respuestas incorrectas </label>
									<input type="text" name="I_Answer1" placeholder="Introduce aquí una respuesta incorrecta" class="form-control">
								</div>
								<div class="form-group">
									<input type="text" name="I_Answer2" placeholder="Introduce aquí una respuesta incorrecta" class="form-control">
								</div>
								<div class="form-group">
									<input type="text" name="I_Answer3" placeholder="Introduce aquí una respuesta incorrecta" class="form-control">
								</div>
								<div class="form-group">
									<label for="Q_Img"> Agregar una imagen a la pregunta </label>
									<input type="file" name="Q_Img" class="form-control">
								</div>
								<button class="btn btn-info btn-block"> Enviar </button>
							</form>
						</div>
					</section>
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
</html>
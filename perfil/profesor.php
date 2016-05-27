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
				<li role="presentation"> <a href="#Check_P" role="tab" data-toggle="tab"> Planes de estudio <span class="glyphicon glyphicon-blackboard"></span> </a> </li>
			</ul>
			<div class="tab-content">
				<div role="tabpanel" class="tab-pane active" id="Add">
					<br/>
					<div class="row">
						<div class="col-lg-6">
							<section>
								<form id="RegisterFormPregunta" method="POST" action="./programs/registro_pregunta.php" autocomplete="off" enctype="multipart/form-data">
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
										<input id="i_Answer1" type="text" name="i_Answer1" placeholder="Respuesta incorrecta" class="form-control" >
									</div>
									<div class="form-group">
										<input id="i_Answer2" type="text" name="i_Answer2" placeholder="Respuesta incorrecta" class="form-control">
									</div>
									<div class="form-group">
										<input id="i_Answer3" type="text" name="i_Answer3" placeholder="Respuesta incorrecta" class="form-control">
									</div>
									<div class="form-group">
										<label for="q_Img"> Agregar una imagen a la pregunta (opcional) </label>
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
				<div role="tabpanel" class="tab-pane" id="Check_P" style="height: 100%;">
					<br/>
					<div class="row">
						<div class="col-lg-6">

					<form id="PlanesEstudio" autocomplete="off">
						<div class="form-group">
							<label for="colegioPlan"> Colegio </label>
							<select id="colegioPlan" class="form-control">
								<option value="1"> Fisica</option>
								<option value="2"> Informatica </option>
								<option value="3"> Matematicas </option>
								<option value="4"> Biologia </option>
								<option value="5"> Educacion Fisica </option>
								<option value="6"> Morfologia, Fisiologia y Salud </option>
								<option value="7"> Orientacion Educativa </option>
								<option value="8"> Psicologia e Higiene Mental </option>
								<option value="9"> Quimica </option>
								<option value="10"> Ciencias Sociales </option>
								<option value="11"> Geografia </option>
								<option value="12"> Historia </option>
								<option value="13"> Aleman </option>
								<option value="14"> Artes Plasticas </option>
								<option value="15"> Danza </option>
								<option value="16"> Dibujo y Modelado </option>
								<option value="17"> Filosofia </option>
								<option value="18"> Frances </option>
								<option value="19"> Ingles </option>
								<option value="20"> Italiano </option>
								<option value="21"> Letras Clasicas </option>
								<option value="22"> Literatura</option>
								<option value="23"> Musica </option>
								<option value="24"> Teatro </option>
							</select>
						</div>
						<div class="form-group">
							<label for="materiaPlan"> Materia </label>
							<select id="materiaPlan"  data-trigger="focus" class="form-control">
							</select>
						</div>
					</form>
					<table id="PlanResult" class="table table-bordered">
					</table>
				</div>
			</div>
				</div>

			</div>
		</div>
	</body>
	<script src="../js/profesor.js"></script>
</html>

<?php
	session_start();
	if(!isset($_SESSION["ID"]))
		header("Location: ../");
?>
<!DOCTYPE html>
<html>
	<head>
		<title> Coordinador | Menu </title>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <link type="image/x-icon" href="../resources/favicon.ico" rel="icon" />
        <script src="../bootstrap/js/jquery.min.js"></script>
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="../styles/coordinador.css">
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
						<span class="navbar-brand" href="#" disabled> Bienvenido coordinador <?php echo $_SESSION["name"]; ?> </span>
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
					<div class="collapse navbar-collapse" id="bs-exanmple-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right visible-xs">
                            <li> <a href="#"> Configuraciones <span class="glyphicon glyphicon-cog"></span> </a> </li>
                            <li> <a href="../programs/cerrar.php"> Salir de mi cuenta <span class="glyphicon glyphicon-log-out"></span> </a> </li>
	                    </ul>
					</div>
				</div>
			</nav>
      <ul class="nav nav-tabs text-center" role="tablist">
        <li role="presentation" class="active"> <a href="#CreateAccounts" role="tab" data-toggle="tab"><span class="glyphicon glyphicon-plus"></span> Crear cuentas de profesores</a> </li>
        <li role="presentation"> <a href="#ApproveQuestions" role="tab" data-toggle="tab"><span class="glyphicon glyphicon-ok"></span> Aprobar preguntas</a></li>
      </ul>
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="CreateAccounts">
            <br/>
			<div class="row">
				<div class="col-lg-6">
					<section>
						<form id="RegisterFormProf" method="POST" action="./programs/registro.php" autocomplete="off">
							<div class="form-group">
								<label for="profRegister"> Nombre del profesor </label>
								<input id="profRegister" data-trigger="focus" name="userRegister" type="text" class="form-control" placeholder="Nombre">
							</div>
							<div class="form-group">
								<label for="areaCoord"> Área de estudio a la que pertenece </label>
								<select id="areaCoord" class="form-control">
									<option value="1"> Área I: Ciencias Físico - Matemáticas y de las Ingenierías </option>
									<option value="2"> Área II: Ciencias Biológicas y de la Salud </option>
									<option value="3"> Área III: Ciencias Sociales </option>
									<option value="4"> Área IV: Humanidades y Artes </option>
								</select>
							</div>
							<div class="form-group">
								<label for="colegioCoord"> Colegio al que pertenece </label>
								<select id="colegioCoord" class="form-control">
								</select>
							</div>
							<div class="form-group">
								<label for="passwordProfRegister"> Contraseña del profesor </label>
								<input id="passwordProfRegister" data-trigger="focus" type="password" class="form-control password" placeholder="Contraseña">
							</div>
							<div class="form-group">
								<label for="passwordProfRegister2"> Repetir contraseña </label>
								<input id="passwordProfRegister2" data-trigger="focus" name="passwordRegister2" type="password" class="form-control password" placeholder="Repetir contraseña">
								<br/>
								<span class="help"> <span class="glyphicon glyphicon-eye-close"></span> Mostrar contraseñas </span>
							</div>
							<button id="ProfRegisterSubmit" type="submit" class="btn btn-default btn-block"> Registrar profesor </button>
						</form>
					</section>
				</div>
			</div>
        </div>
		<div role="tabpanel" class="tab-pane" id="ApproveQuestions">
			<br/>
			<div class="row">
				<div class="col-lg-12">
					<section>
						<form id="Approve" autocomplete="off">
							<div class="form-group">
								<label for="approveArea"> Seleccione un área de estudio </label>
								<select id="approveArea" class="form-control">
									<option value="1"> Área I: Ciencias Físico - Matemáticas y de las Ingenierías </option>
									<option value="2"> Área II: Ciencias Biológicas y de la Salud </option>
									<option value="3"> Área III: Ciencias Sociales </option>
									<option value="4"> Área IV: Humanidades y Artes </option>
								</select>
							</div>
							<div class="form-group">
								<label for="approveColegio"> Seleccione un colegio </label>
								<select id="approveColegio" class="form-control">
								</select>
							</div>
							<div class="form-group">
								<label for="approveMateria"> Seleccione una materia </label>
								<select id="approveMateria" class="form-control">
								</select>
							</div>
							<table id="preguntaResult" class="table table-bordered table-hover table-condensed">
							</table>
						</form>
					</section>
				</div>
			</div>
		</div>
      </div>
    </div>
  </body>
  <script src="../js/coordinador.js"></script>
</html>

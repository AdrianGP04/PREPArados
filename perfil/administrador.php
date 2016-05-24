<?php
	session_start();
	if((!isset($_SESSION["ID"])) || ($_SESSION["name"] != "ENP 6"))
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
		<link rel="stylesheet" href="../styles/administrador.css">
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
						<span class="navbar-brand" href="#" disabled> Bienvenido administrador <?php echo $_SESSION["name"]; ?> </span>
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
        <li role="presentation" class="active"> <a href="#CreateAccounts" role="tab" data-toggle="tab"><span class="glyphicon glyphicon-plus"></span> Crear cuentas de coordinadores</a> </li>
        <li role="presentation"> <a href="#SearchGraphics" role="tab" data-toggle="tab"><span class="glyphicon glyphicon-stats"></span> Consulta de gráficas mensuales </a></li>
        <li role="presentation"> <a href="#SearchUsers" role="tab" data-toggle="tab"><span class="glyphicon glyphicon-search"></span> Consultar usuarios </a></li>
        <li role="presentation"> <a href="#DeleteUsers" role="tab" data-toggle="tab"><span class="glyphicon glyphicon-remove"></span> Eliminar usuarios </a></li>
      </ul>
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="CreateAccounts">
			<br/>
			<div class="row">
				<div class="col-lg-6">
					<section>
						<form id="RegisterFormCoord" method="POST" action="./programs/registro.php" autocomplete="off">
							<div class="form-group">
								<label for="coordRegister"> Nombre del coordinador </label>
								<input id="coordRegister" data-trigger="focus" name="userRegister" type="text" class="form-control" placeholder="Nombre">
							</div>
							<div class="form-group">
								<label for="passwordCoordRegister"> Contraseña del coordinador </label>
								<input id="passwordCoordRegister" data-trigger="focus" ="passwordRegister" type="password" class="form-control password" placeholder="Contraseña">
							</div>
							<div class="form-group">
								<label for="passwordCoordRegister2"> Repetir contraseña </label>
								<input id="passwordCoordRegister2" data-trigger="focus" name="passwordRegister2" type="password" class="form-control password" placeholder="Repetir contraseña">
								<span class="help"> <span class="glyphicon glyphicon-eye-close"></span> Mostrar contraseñas </span>
							</div>
							<button id="CoordRegisterSubmit" type="submit" class="btn btn-default btn-block"> Registrar coordinador </button>
						</form>
					</section>
				</div>
			</div>
        </div>
        <div role="tabpanel" class="tab-pane" id="SearchUsers">
          <section>
            <h2> Consulta de gráficas mensuales </h2>
          </section>
        </div>
        <div role="tabpanel" class="tab-pane" id="SearchGraphics">
          <section>
            <h2> Consulta de usuarios </h2>
          </section>
        </div>
        <div role="tabpanel" class="tab-pane" id="DeleteUsers">
          <section>
            <h2> Eliminación de usuarios </h2>
          </section>
        </div>
      </div>
    </div>
  </body>
  <script src="../js/administrador.js"></script>
</html>

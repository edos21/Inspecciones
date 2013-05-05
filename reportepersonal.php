<?php 

	include 'backend/query-personal2.php';

	if (isset($_GET['no']) == true) {

		echo '<script type="text/javascript">alert("No se ha encontrado ningun registro que coincida con ese nombre.")</script>';

	}

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Sistema de Inspecciones</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
		<script type="text/javascript" src="js/kickstart.js"></script>
		<link rel="stylesheet" type="text/css" href="css/kickstart.css" media="all" />
		<link rel="stylesheet" type="text/css" href="style.css" media="all" />  
	</head>
	<body>
		<header>
			<nav>
				<ul class="menu">
					<li><a href="index.php">Inicio</a></li>
					<li><a>Personal</a>
						<ul>
							<li><a href="cargapersonal.php">Cargar</a></li>
							<li><a href="modificapersonal.php">Modificar/Eliminar</a></li>
						</ul>
					</li>
					<li><a>Inspecciones</a>
						<ul>
							<li><a href="cargainspeccion.php">Cargar</a></li>
							<li><a href="modificainspeccion.php">Modificar/Eliminar</a></li>
						</ul>
					</li>
					<li><a>Reportes</a>
						<ul>
							<li><a href="reportefecha.php">Por Fecha</a></li>
							<li><a href="reporteempresa.php">Por Empresa</a></li>
							<li><a href="#">Por Personal</a></li>
							<li><a href="reportepersonal2.php">Personal/Fecha</a></li>
						</ul>
					</li>
				</ul>
			</nav>
		</header>
		<div id="main">
			<div class="col_12" id="cpersonal">
				<h3>Reporte Por Personal</h3>
				<form method="post" action="rpersonal.php">
					<label for="nombre">Nombre</label>
					<select id="nombre" name="nombre">
						<?php foreach ($ins as $in): ?>
						<option value="<?php echo $in['id']; ?>"><?php echo $in['descripcion']; ?>&nbsp;<?php echo $in['nombre']; ?>&nbsp;<?php echo $in['apellido']; ?></option>
						<?php endforeach; ?>
					</select>
					
					<br><br>
					<input type="submit" class="green" value="Buscar">
				</form>
			</div>
		</div>
	</body>
</html>
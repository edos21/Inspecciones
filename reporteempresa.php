<?php

	include 'backend/includes/conexion.php';

	try {

		$sql = 'SELECT DISTINCT empresa FROM cinspecciones';

		$s = $pdo->prepare($sql);
		$s->execute();

	}

	catch (PDOException $e) {

		echo 'Ha ocurrido un error.';
		exit();

	}

	while ($row = $s->fetch()) {

		$empresas[] = array('empresa' => $row['empresa']);

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
							<li><a href="#">Por Empresa</a></li>
							<li><a href="reportepersonal.php">Por Personal</a></li>
							<li><a href="reportepersonal2.php">Personal/Fecha</a></li>
						</ul>
					</li>
				</ul>
			</nav>
		</header>
		<div id="main">
			<div class="col_12" id="cpersonal">
				<h3>Reporte Por Empresa</h3>
				<form method="post" action="rempresa.php">
					<label for="empresa">Empresa</label>
					<select id="empresa" name="empresa">
						<?php foreach ($empresas as $empresa): ?>
						<?php $nombre = $empresa['empresa']; ?>
						<?php echo '<option value="' . $nombre . '">' . $nombre . '</option>'; ?>
						<?php endforeach; ?>
					</select>
					<br><br>
					<input type="submit" class="green" value="Buscar">
				</form>
			</div>
		</div>
	</body>
</html>
<?php 

	include 'backend/query-tres.php';
	include 'backend/query-grado.php';

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
							<li><a href="reportepersonal.php">Por Personal</a></li>
							<li><a href="reportepersonal2.php">Personal/Fecha</a></li>
						</ul>
					</li>
				</ul>
			</nav>
		</header>
		<div id="main">
			<div class="col_12" id="cpersonal">
				<h3>Modificar Personal</h3>
				<form method="post" action="backend/modificarpersonal.php">
					<?php foreach($contents as $content): ?>
					<label for="cedula">Cedula</label>
					<input type="text" name="cedula" id="cedula" value="<?php echo $content['cedula']; ?>">
					<label for="grado">Grado</label>
					<select name="grado" id="grado">
						<?php foreach ($grados as $grado): ?>
						<option value="<?php echo $grado['id']; ?>"><?php echo $grado['descripcion'];?></option>
						<?php endforeach; ?>
					</select><br><br>
					<label for="apellidos">Apellidos</label>
					<input type="text" name="apellidos" id="apellidos" value="<?php echo $content['apellidos']; ?>">
					<label for="nombres">Nombres</label>
					<input type="text" name="nombres" id="nombres" value="<?php echo $content['nombres']; ?>"><br><br>
					<label for="departamento">Departamento</label>
					<input type="text" name="departamento" id="departamento" value="<?php echo $content['departamento']; ?>"><br><br>
					<input type="hidden" value="<?php echo $content['id']; ?>" name="id">
					<input type="submit" class="green" value="Modificar">
					<input type="reset" class="orange" value="Cancelar">
					<?php endforeach; ?>
				</form>
			</div>
		</div>
	</body>
</html>
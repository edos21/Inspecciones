<?php 

	include 'backend/query-personal2.php';

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
							<li><a href="#">Cargar</a></li>
							<li><a href="modificainspeccion.php">Modificar/Eliminar</a></li>
						</ul>
					</li>
					<li><a>Reportes</a>
						<ul>
							<li><a href="reportefecha.php">Por Fecha</a></li>
							<li><a href="reporteempresa.php">Por Empresa</a></li>
							<li><a href="reportepersonal.php">Por Personal</a></li>
						</ul>
					</li>
				</ul>
			</nav>
		</header>
		<div id="main">
			<div class="col_12" id="cpersonal">
				<h3>Carga de Inspecciones</h3>
				<form method="post" action="backend/cargainspeccion.php">
					<label for="empresa">Empresa</label>
					<input type="text" name="empresa" id="empresa" placeholder="Nombre de la Empresa">
					<label for="fecha">Fecha</label>
					<input type="date" name="fecha" id="fecha" placeholder="Fecha de la Inspecci&oacute;n">
					<br><br>
					<label for="telefono">Telefono</label>
					<input type="text" name="telefono" id="telefono" placeholder="Telefono de la Empresa">
					<label for="region">Region</label>
					<input type="text" name="region" id="region" placeholder="Region de la Empresa"><br><br>
					<label for="direccion">Direccion</label><br>
					<textarea name="direccion" id="direccion" placeholder="Direccion de la Empresa" cols="55"></textarea><br><br>
					<label for="ut">U.T.</label>
					<input type="text" name="ut" id="ut" placeholder="Unidades Tributarias">
					<label for="vehiculo">Vehiculos</label>
					<input type="text" name="vehiculo" id="vehiculo" placeholder="Cantidad de Vehiculos">
					<label for="habitabilidad">Habitabilidad</label>
					<input type="text" name="habitabilidad" id="habitabilidad" placeholder="Habitabilidad">
					<br><br>
					<label for="inspectores">Inspectores</label>
					<select id="inspectores" name="inspectores[]" multiple="multiple" class="fancy">
						<?php foreach ($ins as $in): ?>
						<option value="<?php echo $in['id']; ?>"><?php echo $in['descripcion']; ?>&nbsp;<?php echo $in['nombre']; ?>&nbsp;<?php echo $in['apellido']; ?></option>
						<?php endforeach; ?>
					</select><br><br>
					<input type="submit" class="green" value="Guardar">
					<input type="reset" class="orange" value="Cancelar">
				</form>
			</div>
		</div>
	</body>
</html>
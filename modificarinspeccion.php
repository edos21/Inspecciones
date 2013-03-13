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
							<li><a href="cargainpeccion.php">Cargar</a></li>
							<li><a href="modificainspeccion.php">Modificar/Eliminar</a></li>
						</ul>
					</li>
					<li><a>Reportes</a>
						<ul>
							<li><a href="">Reporte 1</a></li>
							<li><a href="">Reporte 2</a></li>
							<li><a href="">Reporte 3</a></li>
						</ul>
					</li>
				</ul>
			</nav>
		</header>
		<div id="main">
			<div class="col_12" id="cpersonal">
				<h3>Modificar Inspecciones</h3>
				<form method="post" action="backend/modificarinspeccion.php">
					<label for="rif">RIF</label>
					<input type="text" name="rif" id="rif" placeholder="RIF de la Empresa">
					<label for="empresa">Empresa</label>
					<input type="text" name="empresa" id="empresa" placeholder="Nombre de la Empresa"><br><br>
					<label for="telefono">Telefono</label>
					<input type="text" name="telefono" id="telefono" placeholder="Telefono de la Empresa">
					<label for="region">Region</label>
					<input type="text" name="region" id="region" placeholder="Region de la Empresa"><br><br>
					<label for="direccion">Direccion</label><br>
					<textarea name="direccion" id="direccion" placeholder="Direccion de la Empresa" cols="55"></textarea><br><br>
					<label for="ut">U.T.</label>
					<input type="text" name="ut" id="ut" placeholder="Unidades Tributarias">
					Posee Vehiculo <input type="checkbox" name="vehiculo"><br><br>
					<label for="inspectores">Inspectores</label>
					<!--Cargar en value el id del personal de la BD-->
					<select id="inspectores" name="inspectores" multiple="multiple" class="fancy">
						<option value="id">Nombres + Apellidos</option>
						<option value="id">Nombres + Apellidos</option>
					</select><br><br>
					<input type="submit" class="green" value="Modificar">
					<input type="reset" class="orange" value="Cancelar">
				</form>
			</div>
		</div>
	</body>
</html>
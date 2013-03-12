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
					<li><a href="#">Inicio</a></li>
					<li><a>Personal</a>
						<ul>
							<li><a href="cargapersonal.php">Cargar</a></li>
							<li><a href="modificapersonal.php">Modificar/Eliminar</a></li>
						</ul>
					</li>
					<li><a>Inspecciones</a>
						<ul>
							<li><a href="cargainspeccion.php">Cargar</a></li>
							<li><a href="#">Modificar/Eliminar</a></li>
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
				<table class="striped">
					<thead>
						<th>RIF</th>
						<th>Empresa</th>
						<th>Region</th>
					</thead>
					<tbody>
						<tr>
							<td>
								111111
							</td>
							<td>
								PRUEBA HTML
							</td>
							<td>
								PRUEBA HTML
							</td>
							<td>
								<form method="post" action="modificarinspeccion.php">
									<input type="hidden" name="id">
									<input type="submit" class="orange" value="Modificar">
								</form>
								<form method="post" action="eliminarinspeccion.php">
									<input type="hidden" name="id">
									<input type="submit" class="red" value="Eliminar">
								</form>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</body>
</html>
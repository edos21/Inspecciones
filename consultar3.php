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
							<li><a href="reportepersonal.php">Por Fecha</a></li>
							<li><a href="reporteempresa.php">Por Empresa</a></li>
							<li><a href="reportepersonal.php">Por Personal</a></li>
						</ul>
					</li>
				</ul>
			</nav>
		</header>
		<div id="main">
			<div class="col_12" id="cpersonal">
				<h3>Reporte Por Personal</h3>
				<table class="striped">
					<thead>
						<th>Empresa</th>
						<th>Personal</th>
						<th>U.T.</th>
						<th>Vehiculo</th>
						<th>Habitabilidad</th>
					</thead>
					<tbody>
						<tr>
							<td>
								Edosistems
							</td>
							<td>
								Soldadito Yonaikel
							</td>
							<td>
								10
							</td>
							<td>
								5
							</td>
							<td>
								8
							</td>
						</tr>
						<tr>
							<td>
								Ovpersonal
							</td>
							<td>
								Soldadito Yonaikel
							</td>
							<td>
								3
							</td>
							<td>
								1
							</td>
							<td>
								1
							</td>
						</tr>
						<tr>
							<th colspan="2">
								Total
							</th>
							<td>
								13
							</td>
							<td>
								6
							</td>
							<td>
								9
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</body>
</html>
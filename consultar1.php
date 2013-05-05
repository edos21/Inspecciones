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
				<h3>Reporte Por Fecha</h3>
				<table class="striped">
					<thead>
						<th>Empresa</th>
						<th>Personal</th>
						<th>U.T.</th>
						<th>Vehiculo</th>
						<th>Habitabilidad</th>
					</thead>
					<tbody>
						<?php 

							$totalut = 0;
							$totalvehiculo = 0;
							$totalhabitabilidad = 0;

							foreach($datos as $dato):

							$id = $dato['id'];

							$ut = $dato['ut'];
							$vehiculo = $dato['vehiculo'];
							$habitabilidad = $dato['habitabilidad'];

							$totalut += $ut; 
							$totalvehiculo += $vehiculo;
							$totalhabitabilidad += $habitabilidad;

						?>
						<tr>
							<td>
								<?php echo $dato['empresa']; ?>
							</td>
							<td>
								<?php
								
								include 'backend/auxiliar.php';
								
								foreach($infos as $info):
								echo $info['descripcion'].' '.$info['nombres'].' '.$info['apellidos'].'<br>';
								$infos = "";

								endforeach; ?>
							</td>
							<td>
								<?php echo $ut; ?>
							</td>
							<td>
								<?php echo $vehiculo; ?>
							</td>
							<td>
								<?php echo $habitabilidad; ?>
							</td>
						</tr>
						<?php endforeach; ?>
						<tr>
							<th colspan="2">
								Total
							</th>
							<td>
								<?php echo $totalut; ?>
							</td>
							<td>
								<?php echo $totalvehiculo; ?>
							</td>
							<td>
								<?php echo $totalhabitabilidad; ?>
							</td>
						</tr>					
					</tbody>
				</table>
			</div>
		</div>
	</body>
</html>
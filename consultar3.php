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
						<?php 

							$totalut = 0;
							$totalvehiculo = 0;
							$totalhabitabilidad = 0;

							foreach($datos2 as $dato2):

							try {

								$sql = 'SELECT * FROM cinspecciones WHERE 
								id = :id';

								$s1 = $pdo->prepare($sql);
								$s1->bindValue(':id',$dato2['id_inspeccion']);
								$s1->execute();

							}

							catch (PDOException $e) {

								echo 'Ha ocurrido un error.';
								exit();

							}

							while ($row = $s1->fetch()) {

								$datos[] = array('id' => $row['id'], 'empresa' => $row['empresa'], 'ut' => $row['unidadest'], 'vehiculo' => $row['vehiculo'], 'habitabilidad' => $row['habitabilidad']);

								$id = $row['id'];
							
							}

							endforeach;	 

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
						<?php 
							
							endforeach; 
						?>
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
				</table>
			</div>
		</div>
	</body>
</html>
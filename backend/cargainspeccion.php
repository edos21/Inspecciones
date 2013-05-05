<?php 

	include 'includes/conexion.php';

	$d = strtotime($_POST['fecha']);
	$date = date("Y", $d);

	try {

		$sql = 'SELECT * FROM cinspecciones WHERE empresa = :empresa AND YEAR(fecha) = :fecha';

		$s1 = $pdo->prepare($sql);
		$s1->bindValue(':empresa',$_POST['empresa']);
		$s1->bindValue(':fecha',$date);
		$s1->execute();

	}

	catch (PDOException $e) {

		echo 'Ha ocurrido un error.';
		exit();

	}

	$cant = $s1->rowCount();

	if ($cant < 1) {

		try {

			$sql = 'INSERT INTO cinspecciones SET
			empresa = :empresa,
			fecha = :fecha,
			telefono = :telefono,
			region = :region,
			direccion = :direccion,
			unidadest = :ut,
			vehiculo = :vehiculo,
			habitabilidad = :habitabilidad';

			$s = $pdo->prepare($sql);
			$s->bindValue(':empresa',$_POST['empresa']);
			$s->bindValue(':fecha',$_POST['fecha']);
			$s->bindValue(':telefono',$_POST['telefono']);
			$s->bindValue(':region',$_POST['region']);
			$s->bindValue(':direccion',$_POST['direccion']);
			$s->bindValue(':ut',$_POST['ut']);
			$s->bindValue(':vehiculo',$_POST['vehiculo']);
			$s->bindValue(':habitabilidad',$_POST['habitabilidad']);
			$s->execute();

		}

		catch (PDOException $e) {

			echo 'Ha ocurrido un error.' . $e->getMessage();
			exit();

		}

		try {

			$sql = 'SELECT * FROM cinspecciones ORDER BY id DESC LIMIT 1';

			$s = $pdo->prepare($sql);
			$s->execute();


		}
		catch (PDOException $e) {

			echo 'Ha ocurrido un error.' . $e->getMessage();
			exit();

		}

		while ($row = $s->fetch()) {

			$contents[] = array(
				'id' => $row['id']
			);

		}

		foreach($contents as $content):
			$id_inspeccion = $content['id'];
		endforeach;

		$inspectores = $_POST['inspectores'];

		if ($inspectores) {

			foreach($inspectores as $inspector):

				try {

					$sql = 'INSERT INTO personal_inspeccion SET
					id_inspeccion = :id_inspeccion,
					id_personal = :id_personal';

					$s = $pdo->prepare($sql);
					$s->bindValue(':id_inspeccion',$id_inspeccion);
					$s->bindValue(':id_personal',$inspector);
					$s->execute();

				}

				catch (PDOException $e) {

					echo 'Ha ocurrido un error.' . $e->getMessage();
					exit();

				}

			endforeach;

		}

		$empresa = $_POST['empresa'];
		$fecha = $_POST['fecha'];
		$telefono = $_POST['telefono'];
		$region = $_POST['region'];
		$direccion = $_POST['direccion'];
		$ut = $_POST['ut'];
		$vehiculo = $_POST['vehiculo'];
		$habitabilidad = $_POST['habitabilidad'];

		$date = strtotime($fecha);
		$anno = date("Y", $date);
		$mes = date("m", $date);
		$dia = date("d", $date);

		$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"); 

		$month = $meses[$mes-1]; 

		try {

						$sql2 = 'SELECT * FROM `personal_inspeccion`
						INNER JOIN personal ON personal.id = personal_inspeccion.id_personal
						INNER JOIN grado ON grado.id=personal.grado
						WHERE `id_inspeccion` = :id ORDER BY grado.id';
						
						$r = $pdo->prepare($sql2);
						$r->bindValue(':id',$id_inspeccion);
						$r->execute();

					}

					catch (PDOException $e) {

						echo 'Ha ocurrido un error.';
						exit();

					}

					while ($rows = $r->fetch()) {

						$infos[] = array('apellidos' => $rows['apellidos'], 'nombres' => $rows['nombres'], 'cedula' => $rows['cedula'],'descripcion' => $rows['descripcion']);
						
					}

		include_once("dompdf/dompdf_config.inc.php");

		foreach($infos as $info):
			$aux .= 'al ciudadano <b>'.$info["descripcion"].' '.$info["nombres"].' '.$info["apellidos"].'</b>, titular de la cedula de identidad N&deg; <b> '.$info["cedula"].' </b>, ';
		endforeach;

		
		$html = '<img src="../css/cintillo.jpg" style="margin-left:80px; width:450px" /> <br /> <br />
				<h2 style="margin-left:110px; margin-top:50px">HOJA DE DESIGNACION DE INSPECTORES</h2><br />
				<div style="font-size:14px; margin-left:50px; width:490px">Por medio de la presente se designa como inspectores '.$aux.' para realizar la inspecci&oacute;n t&eacute;cnica
				de la empresa <b> '.$empresa.' </b>  ubicada en '.$direccion.', Estado '.$region.'. Tlf. '.$telefono.'.</div><br /> <br />
				<div style="font-size:14px; margin-left:50px; width:480px">Designaci&oacute;n hecha para su conocimiento y dem&aacute;s fines legales consiguientes,  a los
				'.$dia.' d&iacute;as del mes de '.$month.' del a&ntilde;o '.$anno.'.</div><br /> <br /> <br />
				
				<div style="font-size:12px; margin-left:50px;width:480px; text-align:center;"><b>DIOS  Y  FEDERACI&Oacute;N<br /> <br /><br /><br />
				JULIO CESAR CONQUISTA LIRA<br />
				CORONEL<br />
				JEFE DE LA OFICINA DE SUPERVISION Y ASESORAMIENTO TECNICO<br />
				<i>"Independencia, Patria Socialista...Viviremos y Venceremos"</i></b></div><br />
				<small>JCCL/llmr</small>
				';
		
		$dompdf = new DOMPDF();
				$dompdf->set_paper('letter','portrait');
				$dompdf->load_html($html);
				$dompdf->render();
				$nombre_archivo = "reporte.pdf";
				if (!$gestor = fopen($nombre_archivo, 'w')) {
					echo "No se puede abrir el archivo ($nombre_archivo)";
					exit;
				}
				if (fwrite($gestor, $dompdf->output()) === FALSE) {
					echo "No se puede escribir al archivo ($nombre_archivo)";
					exit;
				}
				echo "Exito, al crear ($nombre_archivo)";
				fclose($gestor);
			
			header('Location: reporte.pdf');

	?>
	<script type="text/javascript">
		alert('La inspeccion ha sido cargada.');
		location.href = '../cargainspeccion.php';
	</script>


	<?php
}
else{

		?>

		<script type="text/javascript">
			alert('Empresa ya registrada.');
			location.href = '../cargainspeccion.php';
		</script>

		<?php

	}

?>
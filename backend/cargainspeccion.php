<?php 

	include 'includes/conexion.php';

	$vehiculo = isset($_POST['vehiculo']);
	
	if ($vehiculo == true) {
		$p_vehiculo = 'Si';
	}
	else {
		$p_vehiculo = 'No';
	}

	try {

		$sql = 'INSERT INTO cinspecciones SET
		rif = :rif,
		empresa = :empresa,
		telefono = :telefono,
		region = :region,
		direccion = :direccion,
		unidadest = :ut,
		vehiculo = :vehiculo';

		$s = $pdo->prepare($sql);
		$s->bindValue(':rif',$_POST['rif']);
		$s->bindValue(':empresa',$_POST['empresa']);
		$s->bindValue(':telefono',$_POST['telefono']);
		$s->bindValue(':region',$_POST['region']);
		$s->bindValue(':direccion',$_POST['direccion']);
		$s->bindValue(':ut',$_POST['ut']);
		$s->bindValue(':vehiculo',$p_vehiculo);
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

?>
<script type="text/javascript">
	alert('La inspeccion ha sido cargada.');
	location.href = '../cargainspeccion.php';
</script>
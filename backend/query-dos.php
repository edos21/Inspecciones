<?php 

	include 'includes/conexion.php';

	try {

		$sql = 'SELECT id,empresa,region FROM cinspecciones ORDER BY id DESC';

		$s = $pdo->prepare($sql);
		$s->execute();

	}

	catch (PDOException $e) {

		echo 'Ha ocurrido un error.';
		exit();

	}

	while ($row = $s->fetch()) {

		$contents[] = array(
			'id' => $row['id'],
			'empresa' => $row['empresa'],
			'region' => $row['region']
		);

	}

?>
<?php 

	include 'includes/conexion.php';

	try {

		$sql = 'SELECT id,descripcion FROM grado';

		$s = $pdo->prepare($sql);
		$s->execute();

	}

	catch (PDOException $e) {

		echo 'Ha ocurrido un error.';
		exit();

	}

	while ($row = $s->fetch()) {

		$grados[] = array(
			'id' => $row['id'],
			'descripcion' => $row['descripcion']
		);

	}	

?>
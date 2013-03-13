<?php 

	include 'includes/conexion.php';

	try {

		$sql = 'SELECT id,cedula,nombres,apellidos FROM personal';

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
			'cedula' => $row['cedula'],
			'nombres' => $row['nombres'],
			'apellidos' => $row['apellidos']
		);

	}

?>
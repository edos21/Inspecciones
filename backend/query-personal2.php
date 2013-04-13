<?php 

	include 'includes/conexion.php';

	try {

		$sql = 'SELECT personal.id, personal.nombres, personal.apellidos, grado.descripcion FROM personal INNER JOIN grado on grado.id=personal.grado ORDER BY grado.id';

		$s = $pdo->prepare($sql);
		$s->execute();

	}

	catch (PDOException $e) {

		echo 'Ha ocurrido un error.';
		exit();

	}

	while ($row = $s->fetch()) {

		$ins[] = array(
			'id' => $row['id'],
			'nombre' => $row['nombres'],
			'apellido' => $row['apellidos'],
			'descripcion' => $row['descripcion']
		);

	}	

?>
<?php 

	include 'includes/conexion.php';

	try {

		$sql = 'SELECT id,nombres,apellidos FROM personal';

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
			'apellido' => $row['apellidos']
		);

	}	

?>
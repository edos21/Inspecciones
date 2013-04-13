<?php 

	include 'includes/conexion.php';

	try {

		$sql = 'SELECT * FROM cinspecciones WHERE id = :id';

		$s = $pdo->prepare($sql);
		$s->bindValue(':id',$_POST['id']);
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
			'fecha' => $row['fecha'],
			'telefono' => $row['telefono'],
			'region' => $row['region'],
			'direccion' => $row['direccion'],
			'unidadest' => $row['unidadest'],
			'vehiculo' => $row['vehiculo'],
			'habitabilidad' => $row['habitabilidad']
		);

	}

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
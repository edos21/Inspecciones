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
			'rif' => $row['rif'],
			'empresa' => $row['empresa'],
			'telefono' => $row['telefono'],
			'region' => $row['region'],
			'direccion' => $row['direccion'],
			'unidadest' => $row['unidadest'],
			'vehiculo' => $row['vehiculo']
		);

	}

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
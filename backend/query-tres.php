<?php 

	include 'includes/conexion.php';

	try {

		$sql = 'SELECT * FROM personal WHERE cedula = :cedula';

		$s = $pdo->prepare($sql);
		$s->bindValue(':cedula',$_POST['cedula']);
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
			'grado' => $row['grado'],
			'apellidos' => $row['apellidos'],
			'nombres' => $row['nombres'],
			'departamento' => $row['departamento']
		);

	}

?>
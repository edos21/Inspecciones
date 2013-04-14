<?php 

	include 'backend/includes/conexion.php';

	$id1 = $_POST['nombre'];

	try {

		$sql = 'SELECT * FROM personal_inspeccion WHERE
		id_personal  = :id';

		$s = $pdo->prepare($sql);
		$s->bindValue(':id',$id1);
		$s->execute();

	}

	catch (PDOException $e) {

		echo 'Ha ocurrido un error.';
		exit();

	}

	while ($row = $s->fetch()) {

		$datos2[] = array('id_inspeccion' => $row['id_inspeccion']);

	}

	include 'consultar3.php';
	exit();
?>
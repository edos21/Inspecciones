<?php 

	include 'backend/includes/conexion.php';

	$fecha1 = $_POST['desde'];
	$fecha2 = $_POST['hasta'];

	try {

		$sql = 'SELECT * FROM cinspecciones WHERE fecha BETWEEN :fecha1 AND :fecha2 ORDER BY id DESC';

		$s = $pdo->prepare($sql);
		$s->bindValue(':fecha1',$fecha1);
		$s->bindValue(':fecha2',$fecha2);
		$s->execute();

	}

	catch (PDOException $e) {

		echo 'Ha ocurrido un error.';
		exit();

	}

	while ($row = $s->fetch()) {

		$datos[] = array('id' => $row['id'], 'empresa' => $row['empresa'], 'ut' => $row['unidadest'], 'vehiculo' => $row['vehiculo'], 'habitabilidad' => $row['habitabilidad']);

		$id = $row['id'];
		
	}	

	include 'consultar1.php';
	exit();

?>
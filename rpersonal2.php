<?php 

	include 'backend/includes/conexion.php';

	$fecha1 = $_POST['desde'];
	$fecha2 = $_POST['hasta'];

	try {

		$sql = 'SELECT * FROM personal_inspeccion
		INNER JOIN cinspecciones ON cinspecciones.id = personal_inspeccion.id_inspeccion
		WHERE personal_inspeccion.id_personal  = :id
		AND cinspecciones.fecha BETWEEN :fecha1 AND :fecha2';

		$s = $pdo->prepare($sql);
		$s->bindValue(':id',$_POST['nombre']);
		$s->bindValue(':fecha1',$fecha1);
		$s->bindValue(':fecha2',$fecha2);
		$s->execute();

	}

	catch (PDOException $e) {

		echo 'Ha ocurrido un error.';
		exit();

	}

	while ($row = $s->fetch()) {

		$datos2[] = array('unidadest' => $row['unidadest'], 'vehiculo' => $row['vehiculo'], 'habitabilidad' => $row['habitabilidad']);

	}

	if ($s->rowCount() == 0) {

		header('Location: reportepersonal2.php?no=true');
		exit();

	}

	include 'consultar4.php';
	exit();
?>
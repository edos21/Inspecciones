<?php 

	include 'backend/includes/conexion.php';

	try {

		$sql = 'SELECT * FROM cinspecciones WHERE
		empresa  = :empresa';
		
		$s = $pdo->prepare($sql);
		$s->bindValue(':empresa',$_POST['empresa']);
		$s->execute();

	}

	catch (PDOException $e) {

		echo 'Ha ocurrido un error.';
		exit();

	}

	while ($row = $s->fetch()) {

		$datos[] = array('id' => $row['id'], 'empresa' => $row['empresa'], 'ut' => $row['unidadest'], 'vehiculo' => $row['vehiculo'], 'habitabilidad' => $row['habitabilidad']);

	}

	include 'consultar2.php';
	exit();

?>
<?php 

	include 'backend/includes/conexion.php';

	try {

		$sql = 'SELECT * FROM personal_inspeccion WHERE
		id_personal  = :id';

		$s = $pdo->prepare($sql);
		$s->bindValue(':id',$_POST['nombre']);
		$s->execute();

	}

	catch (PDOException $e) {

		echo 'Ha ocurrido un error.';
		exit();

	}

	while ($row = $s->fetch()) {

		$datos2[] = array('id_inspeccion' => $row['id_inspeccion']);

	}

	if ($s->rowCount() == 0) {

		header('Location: reportepersonal.php?no=true');
		exit();

	}

	include 'consultar3.php';
	exit();
?>
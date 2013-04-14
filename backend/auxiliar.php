<?php

include 'includes/conexion.php';

try {

		$sql2 = 'SELECT * FROM `personal_inspeccion`
		INNER JOIN personal ON personal.id = personal_inspeccion.id_personal
		INNER JOIN grado ON grado.id=personal.grado
		WHERE `id_inspeccion` = :id ORDER BY grado.id';
		
		$r = $pdo->prepare($sql2);
		$r->bindValue(':id',$id);
		$r->execute();

	}

	catch (PDOException $e) {

		echo 'Ha ocurrido un error.';
		exit();

	}

	while ($rows = $r->fetch()) {

		$infos[] = array('apellidos' => $rows['apellidos'], 'nombres' => $rows['nombres'], 'descripcion' => $rows['descripcion']);
		
	}
?>
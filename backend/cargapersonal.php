<?php 

	include 'includes/conexion.php';

	try {

		$sql = 'INSERT INTO personal SET
		cedula = :cedula,
		grado = :grado,
		apellidos = :apellidos,
		nombres = :nombres,
		direccion = :direccion,
		departamento = :departamento';

		$s = $pdo->prepare($sql);
		$s->bindValue(':cedula',$_POST['cedula']);
		$s->bindValue(':grado',$_POST['grado']);
		$s->bindValue(':apellidos',$_POST['apellidos']);
		$s->bindValue(':nombres',$_POST['nombres']);
		$s->bindValue(':direccion',$_POST['direccion']);
		$s->bindValue(':departamento',$_POST['departamento']);
		$s->execute();

	}

	catch (PDOException $e) {

		echo 'Ha ocurrido un error.';
		exit();

	}

?>
<script type="text/javascript">
	alert('La inspeccion ha sido cargada.');
	location.href = '../cargainspeccion.php';
</script>
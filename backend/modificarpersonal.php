<?php 

	include 'includes/conexion.php';

	try {

		$sql = 'UPDATE personal SET
		cedula = :cedula,
		grado = :grado,
		apellidos = :apellidos,
		nombres = :nombres,
		departamento = :departamento WHERE
		id = :id';

		$s = $pdo->prepare($sql);
		$s->bindValue(':cedula',$_POST['cedula']);
		$s->bindValue(':grado', $_POST['grado']);
		$s->bindValue(':apellidos',$_POST['apellidos']);
		$s->bindValue(':nombres',$_POST['nombres']);
		$s->bindValue(':departamento',$_POST['departamento']);
		$s->bindValue(':id',$_POST['id']);
		$s->execute();

	}

	catch (PDOException $e) {

		echo 'Ha ocurrido un error.';

	}

?>
<script type="text/javascript">
	alert('Personal modificado.');
	location.href = '../modificapersonal.php';
</script>
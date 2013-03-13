<?php 

	include 'includes/conexion.php';

	$vehiculo = isset($_POST['vehiculo']);
	
	if ($vehiculo == true) {
		$p_vehiculo = 'Si';
	}
	else {
		$p_vehiculo = 'No';
	}

	try {

		$sql = 'INSERT INTO cinspecciones SET
		rif = :rif,
		empresa = :empresa,
		telefono = :telefono,
		region = :region,
		direccion = :direccion,
		unidadest = :ut,
		vehiculo = :vehiculo';

		$s = $pdo->prepare($sql);
		$s->bindValue(':rif',$_POST['rif']);
		$s->bindValue(':empresa',$_POST['empresa']);
		$s->bindValue(':telefono',$_POST['telefono']);
		$s->bindValue(':region',$_POST['region']);
		$s->bindValue(':direccion',$_POST['direccion']);
		$s->bindValue(':ut',$_POST['ut']);
		$s->bindValue(':vehiculo',$p_vehiculo);
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
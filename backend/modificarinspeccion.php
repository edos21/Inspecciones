<?php 

	include 'includes/conexion.php';

	$id = $_POST['id'];

	$vehiculo = isset($_POST['vehiculo']);
	
	if ($vehiculo == true) {
		$p_vehiculo = 'Si';
	}
	else {
		$p_vehiculo = 'No';
	}

	try {

		$sql = 'UPDATE cinspecciones SET
		rif = :rif,
		empresa = :empresa,
		telefono = :telefono,
		region = :region,
		direccion = :direccion,
		unidadest = :unidadest,
		vehiculo = :vehiculo WHERE
		id = :id';

		$s = $pdo->prepare($sql);
		$s->bindValue(':rif',$_POST['rif']);
		$s->bindValue(':empresa', $_POST['empresa']);
		$s->bindValue(':telefono',$_POST['telefono']);
		$s->bindValue(':region',$_POST['region']);
		$s->bindValue(':direccion',$_POST['direccion']);
		$s->bindValue(':unidadest',$_POST['ut']);
		$s->bindValue(':vehiculo',$p_vehiculo);
		$s->bindValue(':id',$id);
		$s->execute();

	}

	catch (PDOException $e) {

		echo 'Ha ocurrido un error.' . $e->getMessage();

	}

	$inspectores = $_POST['inspectores'];

	if ($inspectores) {

		foreach($inspectores as $inspector):

			try {

				$sql = 'UPDATE personal_inspeccion SET
				id_personal = :id_personal WHERE 
				id_inspeccion = :id_inspeccion';

				$s = $pdo->prepare($sql);
				$s->bindValue(':id_inspeccion',$id);
				$s->bindValue(':id_personal',$inspector);
				$s->execute();

			}

			catch (PDOException $e) {

				echo 'Ha ocurrido un error.' . $e->getMessage();
				exit();

			}

		endforeach;

	}	

?>
<script type="text/javascript">
	alert('Inspeccion modificada.');
	location.href = '../modificainspeccion.php';
</script>
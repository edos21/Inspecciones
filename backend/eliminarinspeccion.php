<?php 

	include 'includes/conexion.php';

	try {

		$sql = 'DELETE FROM cinspecciones WHERE id = :id';

		$s = $pdo->prepare($sql);
		$s->bindValue(':id',$_POST['id']);
		$s->execute();

	}

	catch (PDOException $e) {

		echo 'Ha ocurrido un error.';

	}

?>
<script type="text/javascript">
	alert('Inspeccion eliminada.');
	location.href = '../modificainspeccion.php';
</script>
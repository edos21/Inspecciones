<?php 

	include 'includes/conexion.php';

	try {

		$sql = 'DELETE FROM personal WHERE cedula = :cedula';

		$s = $pdo->prepare($sql);
		$s->bindValue(':cedula',$_POST['cedula']);
		$s->execute();

	}

	catch (PDOException $e) {

		echo 'Ha ocurrido un error.';

	}

?>
<script type="text/javascript">
	alert('Personal eliminado.');
	location.href = '../modificapersonal.php';
</script>
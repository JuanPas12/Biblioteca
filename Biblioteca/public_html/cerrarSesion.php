<?php
	session_start();
	session_destroy();
	echo "<script>
			alert('Sesion cerrada exitosamente');
			document.location = 'Login.php';
		</script>";
?>
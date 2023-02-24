<?php
	session_start();
	include('Conexion/Conn.php');
	$usuario = $_GET['usuario']; 
	$pass = $_GET['pass'];
	$sql = "SELECT * FROM `Administrador` WHERE `Usuario` LIKE '$usuario' AND `Pass` LIKE '$pass'";
	$result = mysqli_query($Conexion, $sql);
	$tamanio = $result -> num_rows;
	$tamanio;
	if ($tamanio == 1) {
		$_SESSION['Usuario'] = $usuario;
		$Fila = $result -> fetch_array();
        echo "<script>
				alert('Bienvenido $usuario');
				document.location = 'MenuPrincipal.php';
			</script>";
	}else {
		echo "<script>
				alert('Usuario o contraseña no validos, verifique...');
				//document.location = 'alta.html';
			    window.history.back();
			</script>";
	}
?>

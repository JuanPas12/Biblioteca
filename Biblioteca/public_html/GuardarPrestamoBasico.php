<?php 
include('Conexion/Conn.php');
  $idUsuario=$_GET['txtIDUsuario'];
  $idLibro=$_GET['cmbLibro'];
  $Inicio=$_GET['txtInicio'];
  $SQL="INSERT INTO `Pr` (`idPrestamo`, `idUsuario`, `idLibrosPrestados`, `HoraPrestamo`, `HoraEntregaPrestamo`, `EstadoPrestamo`) VALUES (NULL, '$idUsuario', '$idLibro', '$Inicio', NULL, '1');";
  $ResCategoria=$Conexion->query($SQL);
 if ($ResCategoria==1) {
  	echo "<script>
			alert('Se genero el prestamo con exito');
			document.location = 'AltaPrestamo.php';
		</script>";
  }else{
  	echo "<script>
			alert('Hubo algun error al momento de procesar su petición, favor de verificar los datos');
			window.history.back();
		</script>";
  }
?>
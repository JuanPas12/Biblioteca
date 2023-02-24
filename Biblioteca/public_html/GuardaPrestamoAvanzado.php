<?php 
include('Conexion/Conn.php');
  $idUsuario=$_GET['txtIDUsuario'];
  $idLibro1=$_GET['cmbLibro1'];
  $idLibro2=$_GET['cmbLibro2'];
  $idLibro3=$_GET['cmbLibro3'];
  $Libros = $idLibro1.",".$idLibro2.",".$idLibro3;
  $Inicio=$_GET['txtInicio'];
  $SQL="INSERT INTO `Pr` (`idPrestamo`, `idUsuario`, `idLibrosPrestados`, `HoraPrestamo`, `HoraEntregaPrestamo`, `EstadoPrestamo`) VALUES (NULL, '$idUsuario', '$Libros', '$Inicio', NULL, '1');";
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
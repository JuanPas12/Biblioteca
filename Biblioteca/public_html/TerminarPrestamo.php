<?php
include('Conexion/Conn.php');
$idPrestamo=$_GET['clave'];
$Fin= date("Y")."-".date("m")."-".date("d")." ".date("H").":".date("i").":".date("s");
$SQL="UPDATE `Pr` SET `HoraEntregaPrestamo` = '$Fin', `EstadoPrestamo` = '0' WHERE `Pr`.`idPrestamo` = $idPrestamo;";
$ResCategoria=$Conexion->query($SQL);
 if ($ResCategoria==1) {
  	echo "<script>
			alert('Se concluyo el prestamo con exito');
			document.location = 'ConsultaGeneralPrestamo.php';
		</script>";
  }else{
  	echo "<script>
				alert('Hubo algun error al momento de procesar su petición, favor de verificar los datos');
				window.history.back();
			</script>";
  }
  
?>
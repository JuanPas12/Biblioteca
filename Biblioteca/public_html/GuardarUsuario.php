<?php 
  $idTipo=$_GET['cmbTipo'];
  $NombreU=$_GET['txtNombreU'];
  $AP=$_GET['txtApellidoPaterno'];
  $AM=$_GET['txtApellidoMaterno'];
  $Telefono=$_GET['txtTelefono'];
  $Email=$_GET['txtEmail'];
  $CURP=$_GET['txtCURP'];
  $FechaR=$_GET['txtFechaRegistroU'];
  $SQL="INSERT INTO `Usuarios` (`idUsuario`, `Nombre`, `ApPaterno`, `ApMaterno`, `Telefono`, `Email`, `idTipoUsuario`, `CURP`, `FechaRegistroUsuario`) VALUES (NULL, '$NombreU', '$AP', '$AM', '$Telefono', '$Email', '$idTipo', '$CURP', '$FechaR');";
  include('Conexion/Conn.php');
  $ResUsuario=$Conexion->query($SQL);
if ($ResUsuario==1) {
  	echo "<script>
			alert('Se almaceno el usuario $NombreU $AP $AM con exito');
			document.location = 'AltaUsuario.php';
		</script>";
  }else{
  	echo "<script>
				alert('Hubo algun error al momento de procesar su petición, favor de verificar los datos');
				window.history.back();
			</script>";
  }
?>
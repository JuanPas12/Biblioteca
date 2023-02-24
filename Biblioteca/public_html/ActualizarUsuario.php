<?php
include('Menu.php');
include('Conexion/Conn.php');
$idUsuario=$_GET['txtIdUsuario'];
$idTipo=$_GET['cmbTipo'];
$NombreU=$_GET['txtNombreU'];
  $AP=$_GET['txtApellidoPaterno'];
  $AM=$_GET['txtApellidoMaterno'];
  $CURP=$_GET['txtCURP'];
  $Telefono=$_GET['txtTelefono'];
  $Email=$_GET['txtEmail'];
  $SQL="UPDATE `Usuarios` SET `Nombre` = '$NombreU', `ApPaterno` = '$AP', `ApMaterno` = '$AM', `Telefono` = '$Telefono', `Email` = '$Email', `idTipoUsuario` = '$idTipo', `CURP` = '$CURP' WHERE `Usuarios`.`idUsuario` = $idUsuario;";
  $ResUsuario=$Conexion->query($SQL);
  if ($ResUsuario==1) {
  	echo "<script>
			alert('Se actualizo el usuario $NombreU $AP $AM con exito');
			document.location = 'ConsultaGeneralUsuario.php';
		</script>";
  }else{
  	echo "<script>
				alert('Hubo algun error al momento de procesar su petición, favor de verificar los datos');
				window.history.back();
			</script>";
  }
?>
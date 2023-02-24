<?php
    include('Conexion/Conn.php');
    $idUsuario=$_GET['clave'];
    $SQL="DELETE FROM `Usuarios` WHERE `Usuarios`.`idUsuario` = $idUsuario";
    $ResUsuario=$Conexion->query($SQL);
 if ($ResUsuario==1) {
  	echo "<script>
			alert('Se elimino el usuario con exito');
			document.location = 'ConsultaGeneralUsuario.php';
		</script>";
  }else{
  	echo "<script>
				alert('Hubo algun error al momento de procesar su petición, favor de verificar los datos');
				window.history.back();
			</script>";
  }
  
?>
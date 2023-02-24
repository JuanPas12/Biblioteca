<?php 
include('Conexion/Conn.php');
  $Nombre=$_GET['txtNombreCategoria'];
  $SQL="INSERT INTO `CategoriaLibros` (`idCategoria`, `Nombre`) VALUES (NULL, '$Nombre');";
  $ResCategoria=$Conexion->query($SQL);
 if ($ResCategoria==1) {
  	echo "<script>
			alert('Se almaceno la categoria $Nombre con exito');
			document.location = 'AltaCategoria.php';
		</script>";
  }else{
  	echo "<script>
				alert('Hubo algun error al momento de procesar su petición, favor de verificar los datos');
				window.history.back();
			</script>";
  }
?>
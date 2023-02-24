<?php
    include('Conexion/Conn.php');
    $idCategoria=$_GET['clave'];
    $SQL="DELETE FROM `CategoriaLibros` WHERE `CategoriaLibros`.`idCategoria` = $idCategoria";
    $ResCategoria=$Conexion->query($SQL);
 if ($ResCategoria==1) {
  	echo "<script>
			alert('Se elimino la categoria $Nombre con exito');
			document.location = 'ConsultaGeneralCategoria.php';
		</script>";
  }else{
  	echo "<script>
				alert('Hubo algun error al momento de procesar su petición, favor de verificar los datos');
				window.history.back();
			</script>";
  }
  
?>
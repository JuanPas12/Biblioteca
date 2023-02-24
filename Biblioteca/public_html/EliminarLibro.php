<?php
    include('Conexion/Conn.php');
    $idLibro=$_GET['clave1'];
    $SQL="DELETE FROM `Libros` WHERE `Libros`.`idLibro` = $idLibro";
    $ResCategoria=$Conexion->query($SQL);
 if ($ResCategoria==1) {
  	echo "<script>
			alert('Se elimino el libro con exito');
			document.location = 'ConsultaGeneralLibro.php';
		</script>";
  }else{
  	echo "<script>
				alert('Hubo algun error al momento de procesar su petición, favor de verificar los datos');
				window.history.back();
			</script>";
  }
  
?>
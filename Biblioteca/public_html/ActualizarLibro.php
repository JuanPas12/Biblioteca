<?php
include('Menu.php');
include('Conexion/Conn.php');
  $idLibro=$_GET['txtIdLibro'];
  $Titulo=$_GET['txtTituloLibro'];
  $Editorial=$_GET['txtEditorial'];
  $Anio=$_GET['txtAnio'];
  $NoEdicion=$_GET['txtNoEdicion'];
  $Autor=$_GET['txtAutor'];
  $Paginas=$_GET['txtPaginas'];
  $Idioma=$_GET['txtIdioma'];
  $idCategoria=$_GET['cmbCategoria'];
  $SQL="UPDATE `Libros` SET `Titulo` = '$Titulo', `Editorial` = '$Editorial', `Anio` = '$Anio', `NoEdicion` = '$NoEdicion', `Autor` = '$Autor', `Paginas` = '$Paginas', `Idioma` = '$Idioma', `idCategoria` = '$idCategoria' WHERE `Libros`.`idLibro` = $idLibro;";
  $ResCategoria=$Conexion->query($SQL);
  if ($ResCategoria==1) {
  	echo "<script>
			alert('Se actualizo el libro $Titulo con exito');
			document.location = 'ConsultaGeneralLibro.php';
		</script>";
  }else{
  	echo "<script>
				alert('Hubo algun error al momento de procesar su petición, favor de verificar los datos');
				window.history.back();
			</script>";
  }
?>
<html>
<head>
  <title></title>
</head>
<body>
  <br>
</body>
</html>
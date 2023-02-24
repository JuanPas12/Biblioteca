<?php 
  include('Conexion/Conn.php');
  $Titulo=$_GET['txtTituloLibro'];
  $Editorial=$_GET['txtEditorial'];
  $Anio=$_GET['txtAnio'];
  $NoEdicion=$_GET['txtNoEdicion'];
  $Autor=$_GET['txtAutor'];
  $Paginas=$_GET['txtPaginas'];
  $Idioma=$_GET['txtIdioma'];
  $idCategoria=$_GET['cmbCategoria'];
  $Fecha=$_GET['txtFechaRegistro'];
  $SQL="INSERT INTO `Libros` (`idLibro`, `Titulo`, `Editorial`, `Anio`, `NoEdicion`, `Autor`, `Paginas`, `Idioma`, `idCategoria`, `FechaRegistroLibro`) VALUES (NULL, '$Titulo', '$Editorial', '$Anio', '$NoEdicion', '$Autor', '$Paginas', '$Idioma', '$idCategoria', '$Fecha');";
  $ResLibro=$Conexion->query($SQL);
if ($ResLibro==1) {
  	echo "<script>
			alert('Se almaceno el libro $Titulo con exito');
			document.location = 'AltaLibro.php';
		</script>";
  }else{
  	echo "<script>
				alert('Hubo algun error al momento de procesar su petición, favor de verificar los datos');
				window.history.back();
			</script>";
  }
?>

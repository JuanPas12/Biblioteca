<?php
include('Menu.php');
?>
<head>
<meta charset="utf-8">
<title>Editar Categoria</title>
</head>
<?php
   include('Conexion/Conn.php');
      $idCategoria=$_GET['clave'];
      $SQL="SELECT * FROM `CategoriaLibros` WHERE `idCategoria` = $idCategoria;";
        $ResLibro=$Conexion->query($SQL);
		$Tam=$ResLibro->num_rows;
		if($Tam>0){ 
        $Fila=$ResLibro->fetch_array();
?>
<body>
<center>
<br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <h1><font color = "#fff">Editar Categoria</font></h1>
	<form action="ActualizarCategoria.php" method="GET">
		<table border="0">
			<tr>
				<td><font color = "#fff">Nombre Categoria</font></td>
				<td valign ="top"><input type="text" class = "caja" name="txtNombreCategoria" placeholder="Por ejemplo: Historia" required value="<?php echo $Fila['Nombre'];?>"></td>
			</tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr>
				<td valign="bottom"><input class="limpiar" type="Reset" name="btResetear" value=Resetear&nbsp;↻>&nbsp;&nbsp;</td>
				<td align="right"><input class="Enviar" type="submit" value="Enviar&nbsp;➜"></td>
			</tr>
		</table>
		<input type="hidden" name="txtIdCategoria" value="<?php echo $Fila['idCategoria'];?>">
	</form>
</center>
</body>
<?php
		}else{
			echo " No existen registros con la categoria: $idCategoria";
		}
?>
</html>
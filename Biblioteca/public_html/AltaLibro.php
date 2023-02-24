<?php
include('Menu.php');
?>
<html>
<head>
	<title>Alta Libro</title>
	<meta charset="utf-8">
</head>
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
    <h1><font color = "#fff">Alta Libro</font></h1>
	<form action="GuardarLibro.php" method="GET">
		<table border="0">
			<tr>
				<td><font color = "#fff">Titulo del Libro</font></td>
				<td><input type="text" class = "caja" name="txtTituloLibro" placeholder="pj: Algebra Lineal" required></td>
			</tr>
			<tr>
				<td><font color = "#fff">Editorial</font></td>
				<td><input type="text" class = "caja" name="txtEditorial" placeholder="pj: MC GRAW HILL" required></td>
			</tr>
			<tr>
				<td><font color = "#fff">Año</font></td>
				<td><input type="text" class = "caja" name="txtAnio" placeholder="pj: 1999" required></td>
			</tr>
			<tr>
				<td><font color = "#fff">Numero de Edición</font></td>
				<td><input type="text" class = "caja" name="txtNoEdicion" placeholder="pj: 2" required></td>
			</tr>
			<tr>
				<td><font color = "#fff">Nombre del Autor</font></td>
				<td><input type="text" class = "caja" name="txtAutor" placeholder="pj: Lipschutz Sewour" required></td>
			</tr>
			<tr>
				<td><font color = "#fff">Numero de paginas</font></td>
				<td><input type="text" class = "caja" name="txtPaginas" placeholder="pj: 200" required></td>
			</tr>
			<tr>
				<td><font color = "#fff">Idioma</font></td>
				<td><input type="text" class = "caja" name="txtIdioma" placeholder="pj: Ingles" required></td>
			</tr>
			<tr>
				<td><font color = "#fff">Categoria</font></td>
				<td>
					<select name="cmbCategoria">
				<?php
				include('Conexion/Conn.php');
				$SQL="SELECT * FROM `CategoriaLibros` ORDER BY `CategoriaLibros`.`Nombre` ASC";
                $ResCategoria=$Conexion->query($SQL);
                while($Fila=$ResCategoria->fetch_array()){
                  echo "<option value=".$Fila ['idCategoria']."> ".$Fila['Nombre']."</option>"."<br>";
                     }
				?>
			    </select>
			</td>
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
		<?php $fcha = date("Y-m-d");?>
		<input type="hidden" class = "caja" name="txtFechaRegistro" value ="<?php echo $fcha;?>">
	</form>
	<br>
	<br>
	<br>
</center>
</body>
</html>
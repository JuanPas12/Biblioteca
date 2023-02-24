<?php
include('Menu.php');
?>
<html>
<head>
	<title>Libros</title>
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
    <h1><font color = "#fff">Libros en Inventario Autor - Libro</font></h1>
    <br>
		<table border="1" class="tftable">
			<tr>
				<th>ID Libro</th>
				<th>Autor</th>				
				<th>Titulo</th>
				<th>Categoria</th>
			</tr>
			<?php
			include('Conexion/Conn.php');
			$SQL="SELECT * FROM `Libros` ORDER BY `Libros`.`Autor` ASC";
			$ResLibro=$Conexion->query($SQL);
			while($Fila=$ResLibro->fetch_array()){
				$SQLCat="SELECT * FROM `CategoriaLibros` WHERE `idCategoria` =".$Fila['idCategoria'];
				$ResCat=$Conexion->query($SQLCat);
				$FilaCat=$ResCat->fetch_array();
				echo "<tr>
				<td>".$Fila['idLibro']."</td>
				<td>".$Fila['Autor']."</td>
				<td>".$Fila['Titulo']."</td>
				<td>".$FilaCat['Nombre']."</td>
			</tr>";
			}
			?>
		</table>
		<br>
		<br>
	</center>
</body>
</html>
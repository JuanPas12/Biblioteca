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
    <h1><font color = "#fff">Libros en Inventario</font></h1>
    <br>
		<table border="1" class="tftable">
			<tr>
				<th>ID Libro</th>
				<th>Titulo</th>
				<th>Autor</th>
				<th>Editorial</th>
				<th>Año</th>
				<th>Numero de Edición</th>
				<th>Idioma</th>
				<th>Categoria</th>
				<th>Fecha de Registro</th>
				<th>Editar</th>
				<th>Eliminar</th>
			</tr>
			<?php
			include('Conexion/Conn.php');
			$SQL="SELECT * FROM `Libros` ORDER BY `Libros`.`Titulo` ASC";
			$ResLibro=$Conexion->query($SQL);
			while($Fila=$ResLibro->fetch_array()){
				$SQLCat="SELECT * FROM `CategoriaLibros` WHERE `idCategoria` =".$Fila['idCategoria'];
				$ResCat=$Conexion->query($SQLCat);
				$FilaCat=$ResCat->fetch_array();
				echo "<tr>
				<td>".$Fila['idLibro']."</td>
				<td>".$Fila['Titulo']."</td>
				<td>".$Fila['Autor']."</td>
				<td>".$Fila['Editorial']."</td>
				<td>".$Fila['Anio']."</td>
				<td>".$Fila['NoEdicion']."</td>
				<td>".$Fila['Idioma']."</td>
				<td>".$FilaCat['Nombre']."</td>
				<td>".$Fila['FechaRegistroLibro']."</td>
				<td align='center'><a href='EditarLibro.php?clave1=".$Fila['idLibro']."'><img src='Icono/edit.png' width = 15></a></td>
				<td align='center'><a href='EliminarLibro.php?clave1=".$Fila['idLibro']."'><img src='Icono/desechar.png' width = 15></a></td>
			</tr>";
			}
			?>
		</table>
		<br>
		<br>
	</center>
</body>
</html>
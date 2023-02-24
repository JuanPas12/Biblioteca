<?php
include('Menu.php');
?>
<html>
<head>
	<title>Categorias Libros</title>
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
	<h1><font color="#fff">Categorias</font></h1>
	 <br>
    <br>
		<table border="1" class="tftable">
			<tr>
				<th>Id Categoria</th>
				<th>Nombre Categoria</th>
				<th>Editar</th>
				<th>Eliminar</th>
			</tr>
            <?php
            include('Conexion/Conn.php');
			$SQL="SELECT * FROM `CategoriaLibros` ORDER BY `CategoriaLibros`.`Nombre` ASC";
			$ResCategoria=$Conexion->query($SQL);
			while($Fila=$ResCategoria->fetch_array()){
				echo"<tr>
				<td>".$Fila['idCategoria']."</td>
				<td>".$Fila['Nombre']."</td>
				<td align='center'><a href='EditarCategoria.php?clave=".$Fila['idCategoria']."'><img src='Icono/edit.png' width = 15></a></td>
				<td align='center'><a href='EliminarCategoria.php?clave=".$Fila['idCategoria']."'><img src='Icono/desechar.png' width = 15></a></td>
			</tr>";
			}
            ?>
		</table>
		<br>
		<br>
	</center>
</body>
</html>
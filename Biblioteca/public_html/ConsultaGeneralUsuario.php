<?php
include('Menu.php');
?>
<html>
<head>
	<title>Consulta Usuarios</title>
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
    <h1><font color = "#fff">Usuarios Registrados</font></h1>
    <br>
		<table border="1" class="tftable">
			<tr>
				<th>ID Usuario</th>
				<th>Prestamos Realizados</th>
				<th>Nombre</th>
				<th>Apellido Paterno</th>
				<th>Apellido Materno</th>
				<th>Tipo Usuario</th>
				<th>Telefono</th>
				<th>Email</th>
				<th>CURP</th>
				<th>Editar</th>
				<th>Eliminar</th>
			</tr>
			<?php
			include('Conexion/Conn.php');
			$SQL="SELECT * FROM `Usuarios` ORDER BY `Usuarios`.`Nombre` ASC";
			$ResUsuario=$Conexion->query($SQL);
			while($Fila=$ResUsuario->fetch_array()){
				$SQLT="SELECT * FROM `TipoUsuario` WHERE `idTipoUsuario` =".$Fila['idTipoUsuario'];
				$ResT=$Conexion->query($SQLT);
				$FilaT=$ResT->fetch_array();
				echo "<tr>
				<td>".$Fila['idUsuario']."</td>
				<td>".$Fila['PrestamosRealizados']."</td>
				<td>".$Fila['Nombre']."</td>
				<td>".$Fila['ApPaterno']."</td>
				<td>".$Fila['ApMaterno']."</td>
				<td>".$FilaT['Nombre']."</td>
				<td>".$Fila['Telefono']."</td>
				<td>".$Fila['Email']."</td>
				<td>".$Fila['CURP']."</td>
				<td align='center'><a href='EditarUsuario.php?clave=".$Fila['idUsuario']."'><img src='Icono/edit.png' width = 15></a></td>
				<td align='center'><a href='EliminarUsuario.php?clave=".$Fila['idUsuario']."'><img src='Icono/desechar.png' width = 15></a></td>
			</tr>";
			}
			?>
		</table>
		<br>
		<br>
	</center>
</body>
</html>
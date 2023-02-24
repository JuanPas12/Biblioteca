<?php
include('Menu.php');
?>
<html>
<head>
	<title>Prestamos</title>
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
	<h1><font color="#fff">Prestamos</font></h1>
	 <br>
    <br>
		<table border="1" class="tftable">
			<tr>
				<th>ID Prestamo</th>
				<th>ID Usuario</th>
				<th>ID's Libros Prestados</th>
				<th>Fecha y Hora de prestamo</th>
				<th>Terminar Prestamo</th>
			</tr>
            <?php
            include('Conexion/Conn.php');
			$SQL="SELECT * FROM `Pr` WHERE `EstadoPrestamo` = 1 ORDER BY `Pr`.`idUsuario` ASC";
			$ResCategoria=$Conexion->query($SQL);
			while($Fila=$ResCategoria->fetch_array()){
				echo"<tr>
				<td>".$Fila['idPrestamo']."</td>
				<td>".$Fila['idUsuario']."</td>
				<td>".$Fila['idLibrosPrestados']."</td>
				<td>".$Fila['HoraPrestamo']."</td>
				<td align='center'><a href='TerminarPrestamo.php?clave=".$Fila['idPrestamo']."'><img src='Icono/Palomita.png' width = 15></a></td>
			</tr>";
			}
            ?>
		</table>
		<br>
		<br>
	</center>
</body>
</html>
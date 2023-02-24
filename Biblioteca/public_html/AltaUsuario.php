<?php
include('Menu.php');
?>
<html>
<head>
	<title>Alta Usuario</title>
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
	<form action="GuardarUsuario.php" method="GET">
		<table border="0">
			<tr>
				<td><font color = "#fff">Nombre</font></td>
				<td><input class ="caja" type="text" name="txtNombreU" placeholder="pj: Juan Pablo" required></td>
			</tr>
			<tr>
				<td><font color = "#fff">Apellido Paterno</font></td>
				<td><input class ="caja" type="text" name="txtApellidoPaterno" placeholder="pj: Tafolla" required></td>
			</tr>
			<tr>
				<td><font color = "#fff">Apellido Materno</font></td>
				<td><input class ="caja" type="text" name="txtApellidoMaterno" placeholder="pj: Buenrostro" required></td>
			</tr>
			<tr>
				<td><font color = "#fff">Telefono</font></td>
				<td><input class ="caja" type="text" name="txtTelefono" placeholder="pj: 1230984576" required></td>
			</tr>
			<tr>
				<td><font color = "#fff">Email</font></td>
				<td><input class ="caja" type="text" name="txtEmail" placeholder="pj: example@gmail.com" required></td>
			</tr>
			<tr>
				<td><font color = "#fff">CURP</font></td>
				<td><input class ="caja" type="text" name="txtCURP" required maxlength="18" onkeyup="javascript:this.value=this.value.toUpperCase();"></td>
			</tr>
			<tr>
				<td><font color = "#fff">Tipo de Usuario</font></td>
				<td>
					<select name="cmbTipo">
				<?php
				$SQL="SELECT * FROM `TipoUsuario`";
				include('Conexion/Conn.php');
                $ResUsuario=$Conexion->query($SQL);
                while($Fila=$ResUsuario->fetch_array()){
                  echo "<option value=".$Fila ['idTipoUsuario']."> ".$Fila['Nombre']."</option>"."<br>";
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
		<input type="hidden" class = "caja" name="txtFechaRegistroU" value ="<?php echo $fcha;?>">
	</form>
	<br>
	<br>
</center>
</body>
</html>
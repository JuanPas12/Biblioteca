<?php
include('Menu.php');
?>
<html>
<head>
  <title>Usuario Basico</title>
</head>
<body>
<center>
	<?php
   include('Conexion/Conn.php');
      $idUsuario=$_GET['txtID'];
      $SQL="SELECT * FROM `Usuarios` WHERE `idUsuario` = $idUsuario";
        $ResUsuario=$Conexion->query($SQL);
		$Tam=$ResUsuario->num_rows;
		if($Tam>0){ 
        $Fila=$ResUsuario->fetch_array();
?>
   <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <h1><font color = "#fff">Alta Libro(s)</font></h1>
	<form action="GuardarPrestamoBasico.php" method="GET">
		<table border="0">
			<tr>
				<td><font color = "#fff">Titulo del Libro</font></td>
				<td>
					<select name="cmbLibro">
				<?php
				include('Conexion/Conn.php');
				$SQL="SELECT * FROM `Libros` ORDER BY `Libros`.`Titulo` ASC";
                $ResCategoria=$Conexion->query($SQL);
                while($Fila=$ResCategoria->fetch_array()){
                  echo "<option value=".$Fila ['idLibro']."> ".$Fila['Titulo']."</option>"."<br>";
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
		<input type="hidden" class = "caja" name="txtIDUsuario" value="<?php echo $idUsuario?>">
		<input type="hidden" class = "caja" name="txtInicio" value ="<?php echo date("Y")."-".date("m")."-".date("d")." ".date("H").":".date("i").":".date("s");?>">
	</form>
</center>
</div>
</body>
<?php
		}else{
			echo "Error";
		}
?>
</html>
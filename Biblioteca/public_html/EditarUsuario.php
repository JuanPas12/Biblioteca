<?php
include('Menu.php');
?>
<html>
<head>
<meta charset="utf-8">
<title>Editar Usuario</title>
</head>
include('Conexion/Conn.php');
      $idUsuario=$_GET['clave'];
      $SQL="SELECT * FROM `Usuarios` WHERE `idUsuario` = '$idUsuario'";
      include('Conexion/Conn.php');
        $ResUsuario=$Conexion->query($SQL);
		$Tam=$ResUsuario->num_rows;
		if($Tam>0){ 
        $Fila=$ResUsuario->fetch_array();
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
    <h1><font color = "#fff">Editar Información de Usuario</font></h1>
      <form action="ActualizarUsuario.php" method="GET">
      <table border="0">
         <tr>
            <td><font color = "#fff">Nombre</font></td>
            <td><input type="text" class = "caja" name="txtNombreU" value="<?php echo $Fila['Nombre'];?>" required></td>
         </tr>
         <tr>
            <td><font color = "#fff">Apellido Paterno</font></td>
            <td><input type="text" class = "caja" name="txtApellidoPaterno" value="<?php echo $Fila['ApPaterno'];?>" required></td>
         </tr>
         <tr>
            <td><font color = "#fff">Apellido Materno</font></td>
            <td><input type="text" class = "caja" name="txtApellidoMaterno" value="<?php echo $Fila['ApMaterno'];?>" required></td>
         </tr>
         <tr>
            <td><font color = "#fff">Telefono</font></td>
            <td><input type="text" class = "caja" name="txtTelefono" value="<?php echo $Fila['Telefono'];?>" required></td>
         </tr>
         <tr>
            <td><font color = "#fff">Email</font></td>
            <td><input type="text" class = "caja" name="txtEmail" value="<?php echo $Fila['Email'];?>" required></td>
         </tr>
         <tr>
            <td><font color = "#fff">CURP</font></td>
            <td><input type="text" class = "caja" name="txtCURP" value="<?php echo $Fila['CURP'];?>" required maxlength="18" onkeyup="javascript:this.value=this.value.toUpperCase();"></td>
         </tr>
         <tr>
            <td><font color = "#fff">Tipo de Usuario</font></td>
            <td>
               <select name="cmbTipo">
            <?php
            $OptionAnterior=$Fila['idTipo'];
            $SQL="SELECT * FROM `TipoUsuario`";
                $ResCategoria=$Conexion->query($SQL);
                while($FilaOpt=$ResCategoria->fetch_array()){
                  echo "<option value=".$FilaOpt ['idTipoUsuario'];
                  if ($OptionAnterior==$FilaOpt['idTipoUsuario']) {
                      echo " selected";
                  }
                  echo " > ".$FilaOpt['Nombre']."</option>";
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
            <td valign="bottom"><input class="limpiar" type="Reset" name="btResetear" value=Resetear&nbsp;↻>&nbsp;&nbsp;</td>
            <td align="right"><input class="Enviar" type="submit" value="Enviar&nbsp;➜"></td>
         </tr>
      </table>
      <input type="hidden" name="txtIdUsuario" value="<?php echo $Fila['idUsuario'];?>">
   </form>
   <br>
   <br>
</center>
</body>
<?php
		}else{
			echo " No existen registros";
		}
?>
</html>
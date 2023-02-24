<?php
include('Menu.php');
?>
<html>
<head>
<meta charset="utf-8">
<title>Editar Libro</title>
</head>
<?php
  include('Conexion/Conn.php');
      $idLibro=$_GET['clave1'];
      $SQL="SELECT * FROM `Libros` WHERE `idLibro` = $idLibro";
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
    <h1><font color = "#fff">Editar Información de un Libro</font></h1>
      <form action="ActualizarLibro.php" method="GET">
      <table border="0">
         <tr>
				<td><font color = "#fff">Titulo del Libro</font></td>
				<td><input type="text" class = "caja" name="txtTituloLibro" placeholder="pj: Algebra Lineal" required value="<?php echo $Fila['Titulo'];?>"></td>
			</tr>
         <tr>
				<td><font color = "#fff">Editorial</font></td>
				<td><input type="text" class = "caja" name="txtEditorial" placeholder="pj: MC GRAW HILL" required value="<?php echo $Fila['Editorial'];?>"></td>
			</tr>
         <tr>
				<td><font color = "#fff">Año</font></td>
				<td><input type="text" class = "caja" name="txtAnio" placeholder="pj: 1999" required value="<?php echo $Fila['Anio'];?>"></td>
			</tr>
        <tr>
				<td><font color = "#fff">Numero de Edición</font></td>
				<td><input type="text" class = "caja" name="txtNoEdicion" placeholder="pj: 2" required value="<?php echo $Fila['NoEdicion'];?>"></td>
			</tr>
        <tr>
				<td><font color = "#fff">Nombre del Autor</font></td>
				<td><input type="text" class = "caja" name="txtAutor" placeholder="pj: Lipschutz Sewour" required value="<?php echo $Fila['Autor'];?>"></td>
			</tr>
         <tr>
				<td><font color = "#fff">Numero de paginas</font></td>
				<td><input type="text" class = "caja" name="txtPaginas" placeholder="pj: 200" required value="<?php echo $Fila['Paginas'];?>"></td>
			</tr>
        <tr>
				<td><font color = "#fff">Idioma</font></td>
				<td><input type="text" class = "caja" name="txtIdioma" placeholder="pj: Ingles" required value="<?php echo $Fila['Idioma'];?>"></td>
			</tr>
         <tr>
            <td><font color = "#fff">Categoria</font></td>
            <td>
               <select name="cmbCategoria">
            <?php
            $OptionAnterior=$Fila['idCategoria'];
            $SQL="SELECT * FROM `CategoriaLibros` ORDER BY `CategoriaLibros`.`Nombre` ASC";
                $ResCategoria=$Conexion->query($SQL);
                while($FilaOpt=$ResCategoria->fetch_array()){
                  echo "<option value=".$FilaOpt ['idCategoria'];
                  if ($OptionAnterior==$FilaOpt['idCategoria']) {
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
        <tr>
				<td valign="bottom"><input class="limpiar" type="Reset" name="btResetear" value=Resetear&nbsp;↻>&nbsp;&nbsp;</td>
                <td align="right"><input class="Enviar" type="submit" value="Enviar&nbsp;➜"></td>
			</tr>
      </table>
      <input type="hidden" name="txtIdLibro" value="<?php echo $Fila['idLibro'];?>">
   </form>
   <br>
   <br>
</center>
</body>
<?php
		}else{
			echo "No existen registros";
		}
?>
</html>
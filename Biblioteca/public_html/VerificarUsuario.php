<?php 
  include('Menu.php');
  include('Conexion/Conn.php');
  $idUsuario=$_GET['txtIDUsuario'];
  $SQL="SELECT * FROM `Usuarios` WHERE `idUsuario` = $idUsuario";
  $ResUsuario=$Conexion-> query($SQL);
  $Fila = $ResUsuario -> fetch_array();
if ($ResUsuario) {
    $Tipo = $Fila ['idTipoUsuario'];
    switch($Tipo){
        case 1:
            echo "
                <center>
                <form action='AltaPrestamoBasico.php' method='GET'>
                     <input type='hidden' value=".$idUsuario." name='txtID'><br><br><br><br><br><br><br><br><br><br><br><br>
                     <td align='right'><input class='Enviar' type='submit' value='Continuar&nbsp;➜'></td>
                </form>
                </center>
	           	";
            break;
        case 2:
            echo "
                <center>
                <form action='AltaPrestamoAvanzado.php' method='GET'>
                     <input type='hidden' value=".$idUsuario." name='txtID'><br><br><br><br><br><br><br><br><br><br><br><br>
                     <td align='right'><input class='Enviar' type='submit' value='Continuar&nbsp;➜'></td>
                </form>
                </center>
	           	";
            break;
        case 3:
            echo "
                <center>
                <form action='AltaPrestamoPremium.php' method='GET'>
                     <input type='hidden' value=".$idUsuario." name='txtID'><br><br><br><br><br><br><br><br><br><br><br><br>
                     <td align='right'><input class='Enviar' type='submit' value='Continuar&nbsp;➜'></td>
                </form>
                </center>
	           	";
            break;
    }
  }else{
  	echo "<script>
				alert('Hubo algun error al momento de procesar su petición, favor de verificar los datos');
				window.history.back();
			</script>";
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Iniciar Sesion</title>
    <style>
        body{
	 font-family: verdana;
	 background-image: url(fondo.jpg);
	background-repeat: no-repeat;
	background-size: 100%;
	background-attachment: fixed;
        }
.enviar{text-decoration:none; text-align:center; 
 padding:10px 32px; 
 border:solid 1px #004F72; 
 -webkit-border-radius:4px;
 -moz-border-radius:4px; 
 border-radius: 4px; 
 font:18px Arial, Helvetica, sans-serif; 
 font-weight:bold; 
 color:#ffffff; 
 background:#092327; 
 -webkit-box-shadow:0px 0px 2px #bababa, inset 0px 0px 1px #ffffff; 
 -moz-box-shadow: 0px 0px 2px #bababa,  inset 0px 0px 1px #ffffff;  
 box-shadow:0px 0px 2px #bababa, inset 0px 0px 1px #ffffff;  
  
  }
  .enviar:hover{
 padding:10px 32px; 
 border:solid 1px #004F72; 
 -webkit-border-radius:4px;
 -moz-border-radius:4px; 
 border-radius: 4px; 
 font:18px Arial, Helvetica, sans-serif; 
 font-weight:bold; 
 color:#ffffff; 
 background:#071d20; 
 -webkit-box-shadow:0px 0px 2px #bababa, inset 0px 0px 1px #ffffff; 
 -moz-box-shadow: 0px 0px 2px #bababa,  inset 0px 0px 1px #ffffff;  
 box-shadow:0px 0px 2px #bababa, inset 0px 0px 1px #ffffff;  
  
 }
 .enviar:active{
 padding:10px 32px; 
 border:solid 1px #004F72; 
 -webkit-border-radius:4px;
 -moz-border-radius:4px; 
 border-radius: 4px; 
 font:18px Arial, Helvetica, sans-serif; 
 font-weight:bold; 
 color:#071d20; 
 background:#ffffff; 
 -webkit-box-shadow:0px 0px 2px #bababa, inset 0px 0px 1px #ffffff; 
 -moz-box-shadow: 0px 0px 2px #bababa,  inset 0px 0px 1px #ffffff;  
 box-shadow:0px 0px 2px #bababa, inset 0px 0px 1px #ffffff;  
  
 }
 .caja { 
padding:3px;
 font-size:16px; 
 font-weight:bold;
 font-style:none; 
 font-family:sans-serif;
 border-radius:20px; 
 border-style:solid; 
 border-width:3px;
 border-color:#092327;  
     
 } 
.caja:focus { 
    outline:none;
    } 
form {
  width: 450px ;
  margin: auto;
  background: rgba(0,0,0,0.4);
  padding: 10px 20px;
  box-sizing: border-box;
  margin-top: 20px;
  border-radius: 7px;
}

 h1 strong {
  margin: 20px;
  padding: 50px;
  text-align: center;
  font-family: "Oswald", Arial, helvetica, sans-serif;
  color: #fff;
  font-weight: normal;
}
    </style>
  </head>
  <body>
    <center>
        <br>
	    <img src = "Icono/IconoS.png" width = 170>
	    <br>
	    <br>
    <br>
    <br>
    <br>
    <br>
    <h1><font color = "#fff">Iniciar Sesión</font></h1>
    <form action="validarUsuario.php" method="get">
      <table>
        <tr>
          <td><font color = "#fff">Usuario</font></td>
          <td> <input class="caja" type="text" name="usuario" required> </td>
        </tr>
        <tr>
          <td><font color = "#fff">Contraseña</font></td>
          <td> <input class="caja" type="password" name="pass" required> </td>
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
          <th></th>
          <td align="right"><input class="enviar" type="submit" value="Iniciar&nbsp;➜"></td>
        </tr>
      </table>
    </form>
  </center>
  </body>
</html>

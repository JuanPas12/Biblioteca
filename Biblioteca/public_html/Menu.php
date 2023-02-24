<?php
session_start();
if (!isset($_SESSION['Usuario'])) {
echo "<script>
alert('No esta autenticado');
document.location = 'Login.php';
</script>";
}
echo "&nbsp;<img border='0' height='12' width='12'src=Icono/Usuario.png><font color = '#fff'><strong> ".$_SESSION['Usuario']."</strong></font>";
echo "<br>";
echo "&nbsp;<a href = 'cerrarSesion.php' class='sesion'>Cerrar Sesion</a>";
?>
<html>
	<head>
	     <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
		<title>Menu Principal</title>
		<style type="text/css">
* {
				margin:0px;
				padding:0px;
			}
			ul, ol {
				list-style:none;
			}

			.nav {
				width:590px;
				margin:0 auto;
				text-align: center;
			}

			.nav > li {
				float:left;
				text-align: center;
			}

			.nav li a {
			background:#092327;
				color:#fff;
				text-decoration:none;
				padding:20px 20px;
				display:block;
			}

			.nav li a:hover {
				background-color:#071D20;
			}

			.nav li ul {
				display:none;
				position:absolute;
				min-width:140px;
			}

			.nav li:hover > ul {
				display:block;
			}

			.nav li ul li {
				position:relative;
			}

			.nav li ul li ul {
				right:-140px;
				top:0px;
			}
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
 .limpiar{text-decoration:none; text-align:center; 
 padding:11px 32px; 
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
  .limpiar:hover{
 padding:11px 32px; 
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
 .limpiar:active{
 padding:11px 32px; 
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
 html, body {
margin: 0;
padding: 0;
height: 100%;
}

#contenedor-pie {
width: 100%;
color:white;
position: absolute;
bottom: 0 !importante;
bottom: -1px;
height: 40px;
background-color:#051C28;
text-align:center;
height: 1.5rem;
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
.centro {
   display: flex;
   align-items: center;
}
.tftable {font-size:14px;color:#fff;width:600px;border-width: 1px;border-color: #686767;border-collapse: collapse;}
.tftable th {font-size:12px;background-color:#092327;border-width: 1px;padding: 8px;border-style: solid;border-color: #686767;text-align:center;}
.tftable tr {background-color:#0e3940;}
.tftable td {font-size:14px;border-width: 1px;padding: 8px;border-style: solid;border-color: #686767;}
.tftable tr:hover {background-color:#092327;}
select {
   background: #fff;
   border: none;
   font-size: 14px;
   height: 30px;
   padding: 5px;
   width: 220px;
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
.foto1{

padding-top: 30px;

}
img {
	transition: all 0.5s ease;
}
img:hover{
	transform: scale(1.3);
}
.sesion{text-decoration:none; text-align:center; 
 padding:5px 20px; 
 border:solid 1px #004F72; 
 -webkit-border-radius:4px;
 -moz-border-radius:4px; 
 border-radius: 4px; 
 font:10px Arial, Helvetica, sans-serif; 
 font-weight:bold; 
 color:#ffffff; 
 background:#092327; 
 -webkit-box-shadow:0px 0px 2px #bababa, inset 0px 0px 1px #ffffff; 
 -moz-box-shadow: 0px 0px 2px #bababa,  inset 0px 0px 1px #ffffff;  
 box-shadow:0px 0px 2px #bababa, inset 0px 0px 1px #ffffff;  
  
  }
  .sesion:hover{
 padding:6px 21px; 
 border:solid 1px #004F72; 
 -webkit-border-radius:4px;
 -moz-border-radius:4px; 
 border-radius: 4px; 
 font:11px Arial, Helvetica, sans-serif; 
 font-weight:bold; 
 color:#ffffff; 
 background:#071d20; 
 -webkit-box-shadow:0px 0px 2px #bababa, inset 0px 0px 1px #ffffff; 
 -moz-box-shadow: 0px 0px 2px #bababa,  inset 0px 0px 1px #ffffff;  
 box-shadow:0px 0px 2px #bababa, inset 0px 0px 1px #ffffff;  
  
 }
 .sesion:active{
 padding:6px 21px; 
 border:solid 1px #004F72; 
 -webkit-border-radius:4px;
 -moz-border-radius:4px; 
 border-radius: 4px; 
 font:11px Arial, Helvetica, sans-serif; 
 font-weight:bold; 
 color:#071d20; 
 background:#ffffff; 
 -webkit-box-shadow:0px 0px 2px #bababa, inset 0px 0px 1px #ffffff; 
 -moz-box-shadow: 0px 0px 2px #bababa,  inset 0px 0px 1px #ffffff;  
 box-shadow:0px 0px 2px #bababa, inset 0px 0px 1px #ffffff;  
  
 }

		</style>
	</head>
	<body background = "fondo.jpg">
	    <center>
	    <img src = "Icono/IconoS.png" width = 170>
	    <br>
	    <br>
	    </center>
		<div id="header">
		   
			<nav>
				<ul class="nav">
					<li><a href="MenuPrincipal.php"><img border="0" height="12" width="12"src=Icono/Menu.png> Menu </a></li>
					<li><a href=""><img border="0" height="12" width="12"src=Icono/Categoria.png> Categoria </a>
						<ul>
							<li><a href="AltaCategoria.php"><img border="0" height="12" width="12"src=Icono/Alta.png> Alta </a></li>
							<li><a href="ConsultaGeneralCategoria.php"><img border="0" height="12" width="12"src=Icono/Consulta.png> Consulta </a></li>
						</ul>
           <li><a href=""><img border="0" height="12" width="12"src=Icono/Libro.png> Libro </a>
						 <ul>
							 <li><a href="AltaLibro.php"><img border="0" height="12" width="12"src=Icono/Alta.png> Alta </a></li>
							 <li><a href="ConsultaGeneralLibro.php"><img border="0" height="12" width="12"src=Icono/Consulta.png> Consulta General</a></li>
							 <li><a href="ConsultaGeneralLibro2.php"><img border="0" height="12" width="12"src=Icono/Consulta.png> Consulta Autor - Libro</a></li>
						</ul>
				<li><a href=""><img border="0" height="12" width="12"src=Icono/Usuario.png> Usuario </a>
 						 <ul>
							 <li><a href="AltaUsuario.php"><img border="0" height="12" width="12"src=Icono/Alta.png> Alta </a></li>
						   <li><a href="ConsultaGeneralUsuario.php"><img border="0" height="12" width="12"src=Icono/Consulta.png> Consulta </a></li>
						 </ul>
						 <li><a href="#"><img border="0" height="12" width="12"src=Icono/Prestamo.png> Prestamo</a>
 						 <ul>
							 <li><a href="AltaPrestamo.php"><img border="0" height="12" width="12"src=Icono/Alta.png> Alta </a></li>
						   <li><a href="ConsultaGeneralPrestamo.php"><img border="0" height="12" width="12"src=Icono/Consulta.png> Consulta </a></li>
						 </ul>

									 </li>
									 
			</nav>
		</body>
</html>

<?php include("Conexion.php"); 
$listado = "select * from nosotros";
	$sentencia = mysql_query($listado,$conn);
	if($rs=mysql_fetch_array($sentencia,$mibase)){
		$descripcion = str_replace("\r\n","<br>",$rs["descripcion"]); 
	}
	
	$listado = "select * from inicio";
	$sentencia = mysql_query($listado,$conn);
	if($rs=mysql_fetch_array($sentencia,$mibase)){
		
		$destacado1 = str_replace("\r\n","<br>",$rs["destacado1"]);
		$destacado2 = str_replace("\r\n","<br>",$rs["destacado2"]);
		$destacado3 = str_replace("\r\n","<br>",$rs["destacado3"]);
		$desdestacado3 = str_replace("\r\n","<br>",$rs["desdestacado3"]);
		$desdestacado2 = str_replace("\r\n","<br>",$rs["desdestacado2"]);
		$desdestacado1 = str_replace("\r\n","<br>",$rs["desdestacado1"]);
	}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Backstage Producciones</title>
<link rel="stylesheet" type="text/css" href="css/estilo.css"/>
<link rel="stylesheet" type="text/css" href="css/normalize.css"/>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500' rel='stylesheet' type='text/css'/>

</head>
<body>
	<header>
		<div id="banner_secciones">
			<div id="headerimgs">
				<div id="headerimg1" class="headerimg"></div>
				<div id="headerimg2" class="headerimg"></div>
				<div id="contenedormenu">
					<div id="contenedorsup">
						<div class="logo_header">
						<img src="imagenes/logotipo.png">
						</div>
						<nav>
							<ul>
								<li><a href="index.php">INICIO</a></li>
								<li><a href="nosotros.php">NOSOTROS</a></li>
								<li><a href="servicios.php">SERVICIOS</a></li>
								<li><a href="ubicacion.php">UBICACIÓN</a></li>
								<li><a href="contacto.php">CONTACTO</a></li>
							</ul>
						</nav>
						
						<figure id="facebook">
							<a href="https://www.facebook.com" target="new">
								<img src="imagenes/facebook.png">
							</a>
						</figure>
						<figure id="twitter">
							<a href="http://www.twitter.com" target="new">
								<img src="imagenes/twitter.png">
							</a>
						</figure>
						<figure id="separador">
							<img src="imagenes/separador1.png">
						</figure>
					</div>
				</div>
			</div>
		</div>
	</header>
	<article id="contenedor_bienvenidos">
		<figure id="foto_bienvenidos">
			<img src="imagenes/nosotros.jpg"  width='342' height='342' title='Nosotros'>
		</figure>
		<h1>NOSOTROS</h1>
		<p><?php echo $descripcion; ?>
		</p>
		<figure id="separador">
			<img src="imagenes/separador2.png">
		</figure>
	</article>

	<div id="contenedordestacado">

		<article class="destacado">
			<h2><?php echo $destacado1; ?></h2>
				<figure class="foto_destacados">
					<img src="imagenes/destacado1.jpg"width='260' height='260'>
				</figure>
			<figure>
				<img src="imagenes/separador3.png">
			</figure>
			<p><?php echo $desdestacado1;  ?></p>
		</article>

		<article class="destacado">
			<h2><?php echo $destacado2; ?></h2>
				<figure class="foto_destacados">
					<img src="imagenes/destacado2.jpg"width='260' height='260'>
				</figure>
			<figure>
				<img src="imagenes/separador3.png">
			</figure>
			<p><?php echo $desdestacado2;  ?></p>
		</article>

		<article class="destacado">
			<h2><?php echo $destacado3; ?></h2>
				<figure class="foto_destacados">
					<img src="imagenes/destacado3.jpg"width='260' height='260'>
				</figure>
			<figure>
				<img src="imagenes/separador3.png">
			</figure>
			<p><?php echo $desdestacado3;  ?></p>
		</article>
	</div>
	<footer>
		<aside id="contenedor_footer">
			<p>Todos los Derechos reservados a:  BackStage Producciones<br>
			+56 9818 2802 / +56 8439 6684 - Backstageservicios@gmail.com
			</p>
			<figure>
				<img src="imagenes/separador3.png">
			</figure>
			<p>Sitio Web Desarrollado por: <a href="http://www.emagenic.cl" target="new">Emagenic Ltda.</a></p>
		</aside>
	</footer>

	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>

</body>	
</html>
</html>

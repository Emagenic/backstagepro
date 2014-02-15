<?php include("Conexion.php");?>
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
	<article id="contenedor_servicios">
		<h1>SERVICIOS</h1>
	</article>

	<div id="contenedordestacado">
<?php 
$listado = "select * from  servicios";
$sentencia = mysql_query($listado,$conn);
while($rs=mysql_fetch_array($sentencia,$mibase)){
?>
		<article class="destacado">
			<h2><?php $texto = str_replace("\r\n","<br>",$rs["titulo"]); echo $texto ?></h2>
				<figure class="foto_destacados">
					<img src="imagenes/servicios/<?php echo $rs["id"]; ?>.jpg"width='260' height='260'>
				</figure>
			<figure>
				<img src="imagenes/separador3.png">
			</figure>
			<p><?php $texto = str_replace("\r\n","<br>",$rs["descripcion"]); echo $texto ?></p>
		</article>
<?php } ?>

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

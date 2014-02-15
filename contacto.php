<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Backstage Producciones</title>
<link rel="stylesheet" type="text/css" href="css/estilo.css"/>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet' type='text/css'/>
<link rel="stylesheet" type="text/css" href="css/normalize.css"/>
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
			<img src="imagenes/contacto.jpg"  width='342' height='342' title='Contactanos'>
		</figure>
		<h1>CONTACTANOS</h1>
		<P>Envianos todas tus dudas y consultas</p>
		<aside id="contacto_contenido">
			<form action="index.php?fun=enviado#contacto" method="post" onSubmit="MM_validateForm('name','','R','message','','R');return document.MM_returnValue;return document.MM_returnValue">
				<input class="input" name="Nombre" type="text" id="name"  placeholder="Nombre"/>
				<input class="input" name="Mail" type="email" id="email"  placeholder="Email"/>
				<input class="input" name="Telefono" type="text" id="name"  placeholder="Teléfono"/>   
            <textarea  name="mensaje" id="mensaje" placeholder="Mensaje"/></textarea>
            <input class="enviar" name="ENVIAR" type="submit"  id="entar" value="ENVIAR"/>
            </form>
		</aside>
	</article>

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

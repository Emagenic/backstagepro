<?php
session_start();
if ($_SESSION["$nusuario"] == "") { 
	header("location: sesion.php","_self");
} else {
include("../Conexion.php");
if ($_POST["Grabar"]){
	$editar="update inicio set 
	descripcion  = '$_POST[descripcion]' ,
	destacado1  = '$_POST[destacado1]' ,
	destacado2  = '$_POST[destacado2]' ,
	destacado3  = '$_POST[destacado3]' ,
	desdestacado1  = '$_POST[desdestacado1]' ,
	desdestacado2  = '$_POST[desdestacado2]',
	desdestacado3  = '$_POST[desdestacado3]' 
	";
	$sentencia = mysql_query($editar,$conn)or die("Error al grabar la venta: ".mysql_error);
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<link href="../Letras.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-image: url();
}
-->
</style>
<link href="Span/Letras.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
body,td,th {
	color: #000000;
}
-->
</style>
<link href="../css/estilos.css" rel="stylesheet" type="text/css">
<title>Inicio</title></head>

<body onLoad="MM_preloadImages('Botones/on/inicio_on.jpg','Botones/on/productos_on.jpg','Botones/on/mercado_on.jpg','Botones/on/certificaciones_on.jpg','Botones/on/demostraciones_on.jpg','Botones/on/distribuidores_on.jpg','Botones/on/quienes_somos_on.jpg','Botones/on/mision_vision_on.jpg','Botones/on/noticias_on.jpg','Botones/on/link_interes_on.jpg','Botones/on/contactenos_on.jpg','Botones/on/galeria_fotos_on.jpg')">
  <?php
	$listado = "select * from inicio";
	$sentencia = mysql_query($listado,$conn);
	if($rs=mysql_fetch_array($sentencia,$mibase)){
		$descripcion = $rs["descripcion"];
		$destacado1 = $rs["destacado1"];
		$destacado2 = $rs["destacado2"];
		$destacado3 = $rs["destacado3"];
		$desdestacado3 = $rs["desdestacado3"];
		$desdestacado2 = $rs["desdestacado2"];
		$desdestacado1 = $rs["desdestacado1"];
	}
	?>
  <form id="form1" name="form1" method="post" action="inicio.php">
    <table width="50%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td colspan="2"><div align="center" class="Subtitulooferta"><strong>Inicio</strong></div></td>
      </tr>
      <tr>
        <td height="5" colspan="2"></td>
      </tr>
      <tr>
        <td width="19%">&nbsp;</td>
        <td width="19%">&nbsp;</td>
      </tr>
      <tr>
        <td class="Letras3">Descripcion</td>
        <td height="94" class="texto"><textarea name="descripcion" id="descripcion" cols="45" rows="5"><?php echo $descripcion; ?> </textarea></td>
      </tr>
      <tr>
        <td class="Letras3">Destacado 1</td>
        <td height="93" class="texto"><textarea name="destacado1" id="destacado1" cols="45" rows="5"><?php echo $destacado1; ?> </textarea></td>
      </tr>
      <tr>
        <td class="Letras3">Descripcion destacado 1</td>
        <td height="95" class="texto"><textarea name="desdestacado1" id="descripcion3" cols="45" rows="5"><?php echo $desdestacado1; ?> </textarea></td>
      </tr>
      <tr>
        <td class="Letras3">Destacado 2        </td>
        <td height="91" class="texto"><textarea name="destacado2" id="destacado2" cols="45" rows="5"><?php echo $destacado2; ?> </textarea></td>
      </tr>
      <tr>
        <td class="Letras3">Descripcion destacado 2</td>
        <td height="91" class="texto"><textarea name="desdestacado2" id="descripcion4" cols="45" rows="5"><?php echo $desdestacado2; ?> </textarea></td>
      </tr>
      <tr>
        <td class="Letras3">Destacado 3        </td>
        <td height="99" class="texto"><textarea name="destacado3" id="destacado3" cols="45" rows="5"><?php echo $destacado3; ?> </textarea></td>
      </tr>
      <tr>
        <td class="Letras3">Descripcion destacado 3        </td>
        <td height="82" class="texto"><textarea name="desdestacado3" id="desdestacado" cols="45" rows="5"><?php echo $desdestacado3; ?> </textarea></td>
      </tr>
      <tr>
        <td colspan="2">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2"><div align="center">
          <label>
            <input type="submit" name="Grabar" id="Grabar" value="Grabar" />
          </label>
        </div></td>
      </tr>
    </table>
    <p align="center"><a href="sesion.php" class="textopie1">Volver</a></p>
</form>
</body>
</html>
<?php } ?>
<?php
session_start();
if ($_SESSION["$nusuario"] == "") { 
	header("location: sesion.php","_self");
} else {
include("../Conexion.php");
	if ($_GET["action"]=="eliminar"){
		$insertar = "delete from servicios WHERE id  = '$_GET[id]' " ; 
		$sentencia=mysql_query($insertar,$conn)or die("Error al eliminar un link: ".mysql_error);
	}
	

 ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<script language="JavaScript">
<!--
<!-- 
function openWindow(url, name) {
popupWin = window.open(url, name, 'scrollbars,resizable,width=650,height=500')
}

// -->


function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
</script>


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
function MM_validateForm() { //v4.0
  if (document.getElementById){
    var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
    for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=document.getElementById(args[i]);
      if (val) { nm=val.name; if ((val=val.value)!="") {
        if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
          if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
        } else if (test!='R') { num = parseFloat(val);
          if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
          if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
            min=test.substring(8,p); max=test.substring(p+1);
            if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
      } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
    } if (errors) alert('The following error(s) occurred:\n'+errors);
    document.MM_returnValue = (errors == '');
} }
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
.Estilo1 {color: #FFFFFF}
.Estilo2 {color: #333333}
body,td,th {
	color: #000000;
}
-->
</style>
<link href="../css/admin.css" rel="stylesheet" type="text/css" />
<title>Admin</title></head>

<body onLoad="MM_preloadImages('Botones/on/inicio_on.jpg','Botones/on/servicioss_on.jpg','Botones/on/mercado_on.jpg','Botones/on/certificaciones_on.jpg','Botones/on/demostraciones_on.jpg','Botones/on/distribuidores_on.jpg','Botones/on/quienes_somos_on.jpg','Botones/on/mision_vision_on.jpg','Botones/on/noticias_on.jpg','Botones/on/link_interes_on.jpg','Botones/on/contactenos_on.jpg','Botones/on/galeria_fotos_on.jpg')">
<div align="center">
  <p>
    <?php 
if ($_POST["Grabar"]){
	
		$insertar="INSERT INTO servicios (titulo,descripcion ) ";
		$insertar.= "VALUES( '$_POST[titulo]','$_POST[descripcion]')";
		$sentencia=mysql_query($insertar,$conn)or die("Error al grabar: ".mysql_error);
	
}

?>
    
</p>
<form action="servicios.php" method="post" name="form1" id="form1" onSubmit="MM_validateForm('codigo','','R','nombre','','R','preciolista','','RisNum','preciomayorista','','RisNum','descripcion','','R');return document.MM_returnValue">
    <table width="70%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td height="38" colspan="2"><div align="center" class="titulos">Agregar un servicio</div></td>
      </tr>
      <tr>
        <td height="32" align="right"><span class="textos">Titulo</span><strong class="texto"> &nbsp; </strong></td>
        <td><input type="text" name="titulo" id="titulo"></td>
      </tr>
      <tr>
        <td width="44%" height="32" align="right"><span class="textos">Descripcion</span><strong class="texto"> &nbsp; </strong></td>
        <td width="56%"><label for="descripcion"></label>
        <textarea name="descripcion" cols="40" rows="6" id="descripcion"></textarea></td>
      </tr>
      <tr>
        <td colspan="2" valign="top" class="Letras1"><div align="right" class="Letras1"></div></td>
      </tr>
      <tr>
        <td colspan="2"><div align="center">
            <label>
            <input type="submit" name="Grabar" id="Grabar" value="Grabar" />
            </label>
        </div></td>
      </tr>
    </table>
</form>
<p><a href="sesion.php" class="textos">Volver</a></p>
<p>
  <?php 
$listado = "select * from  servicios";
$sentencia = mysql_query($listado,$conn);
while($rs=mysql_fetch_array($sentencia,$mibase)){
?>
</p>
<table width="56%" border="2" cellpadding="0" cellspacing="0" class="textotitulo2">
            <tr>
              <td height="265" class="margen"><table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="88%" height="349" valign="top"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td height="31" class="Letras1"><a href="../imagenes/servicios/Upload_foto.php?id=<?php echo $rs["id"]; ?>" class="textos">Cambiar foto</a></td>
                      <td width="16%" class="Letras1"><div align="left" class="Letras1"> 
                      

                      <span class="textobox"><a href="servicios.php?id=<?php echo $rs["id"] ?>&action=eliminar" onClick=" return confirm('¿Está Seguro que desea eliminar?');"><img src="b_drop.png" width="16" height="16" border="0" /></a> &nbsp;</span><span class="textos">Eliminar</span></div></td>
                      <td width="59%" class="textobox"><a href="javascript:openWindow('editarservicios.php?id=<?php echo $rs["id"]; ?>')"javascript:openWindow('editarservicios.php?id=<?php echo $rs["id"]; ?>')""><img src="Lapiz.png" width="16" height="16" border="0"></a>  &nbsp;<span class="textos">Editar</span><span class="textoinfo"></a></span></td>
                    </tr>
                    <tr>
                      <td width="25%" rowspan="2" valign="top" class="Letras1"><p><img src="../imagenes/servicios/<?php echo $rs["id"]; ?>.jpg" width="245" height="245"></p>
                      <p>&nbsp;</p></td>
                      <td height="29" valign="top" class="Letras1"><div align="right" class="textoinfo"><span class="textos">Titulo</span> &nbsp; </div></td>
                      <td valign="top"><?php $texto = str_replace("\r\n","<br>",$rs["titulo"]); echo $texto ?></td>
                    </tr>
                    <tr>
                      <td colspan="2" valign="top" class="Letras1"><?php $texto = str_replace("\r\n","<br>",$rs["descripcion"]); echo $texto ?></td>
                    </tr>
                    <tr>
                      <td height="18" colspan="3" align="center" valign="middle" class="Letras1">&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="35" colspan="3" align="center" valign="middle" bgcolor="#781b6f" class="Letras1"><p class="textos2">&nbsp;</p></td>
                    </tr>
                  </table></td>
                </tr>
                <tr>
                  <td height="19" valign="top">&nbsp;</td>
                </tr>
                </table>
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td height="2" bgcolor="#333333"></td>
                  </tr>
                </table></td>
            </tr>
  </table>
  <?php } ?>
</div>
<div align="left"></div>
<div align="center"></div>
<p align="center"><a href="sesion.php" class="textos">Volver</a></p>
</body>
</html>

        
<?php } ?>
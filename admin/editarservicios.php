<?php
session_start();
if ($_SESSION["$nusuario"] == "") { 
	header("location: sesion.php","_self");
} else {
include("../Conexion.php");
if ($_POST["Modificar"]){
	$insertar = "UPDATE servicios SET titulo ='".$_POST["titulo"]."',descripcion ='".$_POST["descripcion"]."'  WHERE id  = '" .$_GET["id"]."' " ; 
	$sentencia=mysql_query($insertar,$conn)or die("Error al grabar un servicio: ".mysql_error);


?>
<script language="javascript">
	window.opener.document.location="servicios.php"
	window.close();
	</script>	
<?php } ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Editar</title>
<link href="../css/admin.css" rel="stylesheet" type="text/css" />
</head>

<body>

<?php 
$listado = "select * from  servicios where id ='$_GET[id]'";
$sentencia = mysql_query($listado,$conn);
while($rs=mysql_fetch_array($sentencia,$mibase)){
?>
<form id="form1" name="form1" method="post" action="editarservicios.php?id=<?php echo $_GET["id"]; ?>">
  <table width="69%" border="0" align="left" cellpadding="0" cellspacing="0">
    <tr>
      <td width="3%" rowspan="3" valign="top">&nbsp;</td>
      <td width="97%" valign="top"><p>
        <label>
        <input type="submit" name="Modificar" id="Modificar" value="Modificar" />
        </label>
      </p>
          <table width="100%" border="1" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td width="24%" align="right" valign="top" class="textobox">&nbsp;</td>
              <td width="76%" valign="top" class="Letras1"><label for="fecha_evento"></label></td>
            </tr>
            <tr>
              <td height="35" align="right" valign="top" class="textos">Titulo  </td>
              <td valign="top" class="Letras1"><input name="titulo" type="text" id="titulo" value="<?php echo $rs["titulo"]; ?>" /></td>
            </tr>
            <tr>
              <td height="101" valign="top" class="textobox"><div align="right" class="titulo"><span class="textos">Contenido  </span></div></td>
              <td valign="top" class="Letras1"><span class="textobox">
                <textarea name="descripcion" cols="40" rows="5" class="Letras1" id="contenido_servicio3"><?php echo $rs["descripcion"]; ?></textarea>
              </span></td>
            </tr>
            <tr>
              <td valign="top" class="textobox">&nbsp;</td>
              <td valign="top" class="Letras1">&nbsp;</td>
            </tr>
            <tr>
              <td valign="top" class="textobox"><div align="right" class="titulo"></div></td>
              <td valign="top" class="Letras1">&nbsp;</td>
            </tr>
      </table></td>
    </tr>
    <tr>
      <td valign="top"><div align="center"></div></td>
    </tr>
    <tr>
      <td height="18" valign="top">&nbsp;</td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
<?php } ?>
</body>
</html>

<?php } ?>
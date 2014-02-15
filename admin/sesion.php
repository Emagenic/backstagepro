<?php
include("../Conexion.php");
session_start();
if($_GET["fun"]=="cerrar"){
	unset($_SESSION["$nusuario"]);
}
if($_POST["Entrar"]){	
	$password = md5($_POST["password_txt"]);
	$listado = "select * from usuario where usuario = '$_POST[nusuario_txt]' and password  = '$password'  ";
	$sentencia = mysql_query($listado,$conn);
	if($rs=mysql_fetch_array($sentencia,$mibase)){
		$_SESSION["$nusuario"] = $rs["usuario"];
		$perfil = $rs["perfil"];
	} else {
		echo "Usuario o password no corresponde";
	}
} 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>Administrador</title>
<link href="../Letras.css" rel="stylesheet" type="text/css" />
<link href="../css/estilos.css" rel="stylesheet" type="text/css" />
<style type="text/css">
body {
	background-repeat: repeat-x;
}
</style>
<link href="../css/estilo.css" rel="stylesheet" type="text/css" />
</head>

<body>
<p align="center">&nbsp;</p>
<div align="center">
  <?php if ($_SESSION["$nusuario"] == "") { ?>
  <span class="Subtitulo1">Inicie sesion para modificar el contenido</span></div>
<form id="form1" name="form1" method="post" action="sesion.php">
  <div align="center">
    <table width="200" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="80" class="PreSubtitulo1">Usuario</td>
        <td width="120"><label>
          <input name="nusuario_txt" type="text" class="Letras1" id="nusuario_txt" size="15" />
        </label></td>
      </tr>
      <tr>
        <td height="5" colspan="2" class="Letras1"></td>
      </tr>
      <tr>
        <td class="PreSubtitulo1">Password</td>
        <td><input name="password_txt" type="password" class="Letras1" id="password_txt" size="15" /></td>
      </tr>
      <tr>
        <td height="5" colspan="2"></td>
      </tr>
      <tr>
        <td colspan="2"><div align="center">
          <label>
            <input name="Entrar" type="submit" class="Boton1" id="Entrar" value="Entrar" />
            </label>
        </div></td>
      </tr>
    </table>
  </div>
</form>
<div align="center">
  <p>
    <?php } else  { ?>
  </p>
  <p class="PreSubtitulo1">Usuario: <?php echo $_SESSION["$nusuario"]; ?> </p>
  <table width="200" border="1" cellspacing="1" cellpadding="0">
    <tr>
      <td><table width="200" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="25" align="left" bgcolor="#CCCCCC" class="Letras1 Estilo1"><div align="center" class="Subtitulo1"><strong>MENU PRINCIPAL</strong></div></td>
        </tr>
        
        <tr>
          <td height="5" align="left" bgcolor="#FFFFFF"></td>
        </tr>
        <tr>
          <td height="20" align="left" bgcolor="#FFFFFF"><a href="inicio.php" class="Letras3"> &nbsp; Inicio</a></td>
        </tr>
        <tr>
          <td height="20" align="left" bgcolor="#FFFFFF"><a href="nosotros.php" class="Letras3">&nbsp; Nosotros</a></td>
        </tr>
        
        <tr>
          <td height="20" align="left" bgcolor="#FFFFFF" class="Letras3"><a href="servicios.php" class="Letras3">&nbsp; Servicios</a></td>
        </tr>
        <tr>
          <td height="7" align="left" bgcolor="#FFFFFF">&nbsp;</td>
        </tr>
        <tr>
          <td height="19" align="left" bgcolor="#FFFFFF" class="Subtitulooferta"><a href="cambiopassword.php" class="Firma"><strong>&nbsp; Cambio de password</strong></a></td>
        </tr>
        <tr>
          <td height="23" align="left" bgcolor="#FFFFFF"><a href="sesion.php?fun=cerrar" class="Firma"><strong> &nbsp; Cerrar sesion</strong></a></td>
        </tr>
        
      </table></td>
    </tr>
  </table>
</div>
<?php } ?>
</body>
</html>

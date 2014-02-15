<? 
$cadenatexto = $_GET["cadenatexto"]; 
$nombre_archivo = $cadenatexto .".jpg";
$tipo_archivo = $HTTP_POST_FILES['userfile']['type']; 
$tamano_archivo = $HTTP_POST_FILES['userfile']['size']; 
    if (move_uploaded_file($HTTP_POST_FILES['userfile']['tmp_name'], $nombre_archivo)){ 
 		echo "<div align=center>El archivo ha sido cargado correctamente.</div>"; 
	   	echo "<div align=center>";
		echo "<a href=../../admin/servicios.php>";
		echo "Volver</a></div>";
	}else{ 
       echo "Ocurrió algún error al subir el fichero. No pudo guardarse."; 
    }  
?> 
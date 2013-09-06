<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tres Deseos Tarjetas - 15 Años</title>
<link rel="stylesheet" type="text/css" href="css/gral.css" />
<link rel="stylesheet" type="text/css" href="css/contacto.css" />


<script src="js_galeria/jquery.min.js" type="text/javascript"></script>

</head>

<body>
<div id="contenedor">
    
	<?php include_once 'includ/botonera.php';?>

<div id="contenido">

<h1>Solicite un Presupuesto!</h1>
<div id="formulario">
<form action="" method="post">
Nombre<input type="text" placeholder="Nombre" name="nombre" /><br/>
Apellido<input type="text" placeholder="Apellido" name="apellido" /><br/>
Telefono <input type="text" placeholder="Telefono" name="tel" /><br/>
E-mail <input type="email" placeholder="Correo Electronico" name="mail" /><br/>
<br/>
Seleccione:<br/> 
Cantidad: <input type="number" name="cantidad" /><br/>
Evento: <select name="evento">
 <option value="1">Casamiento</option>
 <option value="2">15 años</option>
 <option value="3">Fiesta Infantil</option>
<option value="4">Bautismo</option>
 <option value="5">Tarjeta de Fin de Año</option>
 <option value="6">Tarjeta Personal</option>
</select><br/>
Incluye Adicionales?: <input type="checkbox" name="adicionales" /><br/>
Comentarios:<textarea name="comentarios" cols="50" rows="14"></textarea>
</form>

</form>
    
</div>
<?php include_once 'includ/footer.php';?>
</div>
</body>
</html>
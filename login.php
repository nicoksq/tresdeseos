<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tres Deseos Tarjetas - 15 Años</title>
<link rel="stylesheet" type="text/css" href="css/gral.css" />
<link rel="stylesheet" type="text/css" href="css/login.css" />


</head>

<body>
<div id="contenedor">

	<?php include_once 'includ/botonera.php';?>

<div id="login">
	<form action="procesaLogin.php" method="post">
		<fieldset>
		<legend>TresDeseos 2.0</legend>
		<label for="usuario">Usuario</label><input name="usuario" id="usuario" type="text" placeholder="Usuario"/><br/>
	    <label for="clave">Clave</label><input name="clave" id="clave" type="password" placeholder="Password"/>
	    <br/>
	    <input type="submit" value="Iniciar Sesion" />
	    </fieldset>
	</form>
</div>
    
<?php include_once 'includ/footer.php';?>

</div>
</body>
</html>
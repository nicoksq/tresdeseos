<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tres Deseos Tarjetas</title>
<link rel="stylesheet" type="text/css" href="css/gral.css" />
<link rel="stylesheet" type="text/css" href="css/estilo.css" />

<link rel="stylesheet" href="js y css slider/nivo-slider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="js y css slider/default.css" type="text/css" media="screen" />

	<script type="text/javascript" src="js y css slider/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="js y css slider/jquery.nivo.slider.js"></script><script type="text/javascript">
$(window).load(function() {
    $('#slider').nivoSlider();
    });
    </script>


</head>

<body>
<div id="contenedor">

	<?php include_once 'includ/botonera.php';?>
    
 <div id="promos">
    <div class="slider-wrapper theme-default">
		<div id="slider" class="nivoSlider">
                <img src="imagenes/promos/800x400-presentacion-quinceanos.jpg" data-thumb="IMG/800x400-presentacion-casamiento.jpg" alt="tarjetas De Casamiento" title=" TARJETAS CASAMIENTO"data-transition="slideInLeft"/>
                <img src="imagenes/promos/800x400-presentacion-infantil.jpg" data-thumb="IMG/800x400-presentacion-infantil.jpg"  alt="tarjetas De Cumpleaños Infantiles" title="TARJETAS INFANTILES"data-transition="slideInLeft" />
                <img src="imagenes/promos/800x400-presentacion-casamiento.jpg" data-thumb="IMG/800x400-presentacion-quinceanos.jpg" alt="tarjeta Quince Años" title="QUINCE AÑOS "data-transition="slideInLeft" />
		</div>
        <div id="htmlcaption" class="nivo-html-caption"></div>
 </div> 
    
<div id="continfo">
	<div id="servi">
    <h2>Visite nuestras galerias!</h2>
   	
      <a href="galeria.php?tarjetas=quince"><img src="imagenes/animacion_info/15.gif" width="100" height="100" alt="quince-años" /> <p>15 Años</p></a>
      <a href="galeria.php?tarjetas=casamiento"><img src="imagenes/animacion_info/casamiento.gif" width="100" height="100" alt="casamiento" /><p>Casamiento</p></a>
      <a href="galeria.php?tarjetas=infantil"><img src="imagenes/animacion_info/icono-glob-infantil.gif" width="100" height="100" alt="Cumple Años Infantiles" /><p>Infantiles</p></a>
    
      <a href="galeria.php?tarjetas=bautismo"><img src="imagenes/animacion_info/osito-bautismo.gif" width="100" height="100" alt="bautismo" /><p>Bautismo</p></a>
      <a href="galeria.php?tarjetas=findeano"><img src="imagenes/animacion_info/saludo-fin-de-ano-icono.gif" width="100" height="100"  alt="saludo fin de año"/><p>Tarjeta Fin de Año</p> </a>
      <a href="galeria.php?tarjetas=tpersonal"><img src="imagenes/animacion_info/tarjeta-personal-icono.gif" width="100" height="100" alt="tarjeta personal" /><p>Tarjeta Personal</p> </a>
    <div id="clear"></div>
    
    
    </div>
    
    <div id="servi2">
        <a href="promociones.php"><img src="imagenes/info2/promociones.gif" width="100" height="100" alt="PROMOCIONES"><p>Conoce nuestras promociones!</p></a>
        <a href="presupuesto.php"><img src="imagenes/info2/solicitar-presupuesto.gif" width="100" height="100" alt="solicitar presupuesto"><p>Solicita un presupuesto!</p></a>
        <a href="contacto.php"> <img src="imagenes/info2/solicitar-t-entrevista.gif" width="100" height="100" alt="solicitar entrevista"><p>Solicita una entrevista!</p></a>
	</div>

<?php include_once 'includ/footer.php';?>

</div>
</div>
</body>
</html>
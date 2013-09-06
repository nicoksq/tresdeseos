<?php
$server="127.0.0.1";
$usuario_db="uv1419";
$clave_db="tumbo758verba";
$base="uv1419_tresdeseostarjetas";
$link = mysqli_connect($server,$usuario_db,$clave_db,$base);



if (!$link) {
    		die('Error de Conexion (' . mysqli_connect_errno() . ') ' . mysqli_connect_error() );
}





	
?>
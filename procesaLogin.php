<?php
include_once 'conection.php';

$usuario_db = $_POST['usuario'];
$clave_db = md5($_POST['clave']);

$sql = "SELECT * FROM t_usuarios WHERE usuario='$usuario_db' AND clave='$clave_db'";
$result = mysqli_query($link, $sql);

if(mysqli_fetch_row($result) != 0 ){
	$session_on = session_start();
	
	$fila = mysqli_fetch_assoc($result);
	
	$_SESSION['id_usuario'] = $fila['id_usuario'];
	
	header("location:./admin/menu.php?session-id=$id");
}else{ ?>

	<script type="text/javascript">
		alert("No se pudo iniciar la Sesion");
		document.location("login.php");
	</script>
	
<?php } ?>

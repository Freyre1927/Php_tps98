<?php

include("bd.php");

	if (isset($_POST['enviar_productos'])) {

		$nombre = $_POST['nombre'];
		$descripcion = $_POST['descripcion'];
		$valorunitario = $_POST['valorunitario'];
		$cantidad = $_POST['cantidad'];
		$imagen = $_POST['imagen'];
	


$query = "INSERT INTO productos(nombre, descripcion, valorunitario, cantidad, imagen) VALUES('$nombre','$descripcion', '$valorunitario', '$cantidad', '$imagen')";
	$resultado = mysqli_query($conn, $query);


	$_SESSION['mensaje'] = 'campos guardados exitosamente';
	$_SESSION['tipo_mensaje'] = 'success'; 

	header("location: productos.php");
	exit;

}
if (isset($_POST['enviar_usuario'])) {
	
		$nombres = $_POST['nombres'];
		$apellidos = $_POST['apellidos'];
		$correo = $_POST['correo'];
		$clave = $_POST['clave'];
		$telefono = $_POST['telefono'];
		$direccion = $_POST['direccion'];
		$ciudad = $_POST['ciudad'];
		$rol = $_POST['rol'];



$query = "INSERT INTO usuarios(nombres, apellidos, correo, clave, telefono, direccion, ciudad, roles_idroles) VALUES('$nombres','$apellidos', '$correo', '$clave', '$telefono', '$direccion', '$ciudad', $rol)";
	$resultado = mysqli_query($conn, $query);


	$_SESSION['mensaje'] = 'campos guardados exitosamente';
	$_SESSION['tipo_mensaje'] = 'success'; 

	header("location: usuarios.php");


}

?>
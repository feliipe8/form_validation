<?php
	//var_dump($_POST);
	$salt = "MATRIX";
	$usuario = array();
	if(isset($_POST["nombre"]) && isset($_POST["apellido"])&& isset($_POST["celular"]) && isset($_POST["correo"]) && isset($_POST["ciudad"]))
	{
		$usuario["direccion"]    =   $_POST["direccion"];
		$usuario["nombre"]       =   $_POST["nombre"];
		$usuario["apellido"]     =   $_POST["apellido"];
		$usuario["correo"]       =   $_POST["correo"];
		$usuario["telefono"]     =   $_POST["telefono"];
		$usuario["hamburguesa"]  =   $_POST["hamburguesa"];
	}
	$usuario["clave"] =   md5($salt.$_POST["clave1"]);

	echo json_encode($usuario);
?>
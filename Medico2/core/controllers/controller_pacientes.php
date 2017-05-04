<?php
	require_once("../conexion.php");

	$nombre_p=$_POST["nombre_p"];
	$ap_p=$_POST["ap_p"];
	$am_p=$_POST["am_p"];
	$edad=$_POST["edad"];
	$telefono=$_POST["telefono"];
	$id_sexo=$_POST["id_sexo"];
	$id_direccion=$_POST["id_direccion"];

	$sql="insert into pacientes values('','".$nombre_p."','".$ap_p."','".$am_p."','".$edad."','".$telefono."','".$id_sexo."','".$id_direccion."')";

	$conexion->query($sql);
	$conexion->close();

	echo "nombre_p : ".$nombre_p."<br>";
	echo "ap_p : ".$ap_p."<br>";
	echo "am_p : ".$am_p."<br>";
	echo "edad : ".$edad."<br>";
	echo "telefono : ".$telefono."<br>";
	echo "id_sexo : ".$id_sexo."<br>";
	echo "id_direccion : ".$id_direccion."<br>";
?>
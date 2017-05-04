<?php
	$conexion=new mysqli("localhost","root","","citasmedicas");
		if ($conexion->connect_errno) {
			printf("falloo la conexion: %s\n", $conexion->connect_error);
			exit();
			# code...
		}
		// else
		// {
		// 	echo "Conexion Exitosa";
		// }
?>
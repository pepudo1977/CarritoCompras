<?php
include ("funciones.php");
$cedula =$_POST["cedula"];
$nombre =$_POST["nombre"];
$direccion =$_POST["direccion"];
$telefono =$_POST["telefono"];
$clave =$_POST["clave"];

$insertar = "INSERT INTO clientes1(cedula, nombre, direccion,telefono,clave) VALUES ('$cedula','$nombre','$direccion','$telefono','$clave')";
$resultado = mysqli_query($conectar,$insertar);
if(!resultado){
	echo 'Error al registrar';
}else{
	echo 'usuario resitrado exitosamente';

}
mysql_close($conectar);
?>
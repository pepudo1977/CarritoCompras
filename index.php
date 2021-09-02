<?php
 include ("funciones.php");
 session_start();
 $conect=conexion();

 if (isset($_POST['enviar'])) {
 	$usuario=$_POST['usuario1'];
 	$clave=$_POST['clave1'];
 	$validar= ingresar($usuario,$clave);
 	if ($validar>0) {
 		$_SESSION['usuario']=$usuario;
 		$query="select * from clientes where cedula= '$usuario' and clave = '$clave' ";
 		$enviarC=mysqli_query($conect,$query);
 		$ver = mysqli_fetch_array($enciarC);
 		$_SESSION['id']=$ver['nombre'];
 		$_SESSION['nombre']=$ver['nombre'];
 		header('location:pagina.php');

 	}else{
 		echo '<scrip> alert ("ERROR"); </scrip>';
 	}
 }


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulario</title>
	<!-- Latest compiled and minified CSS -->	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="estilo.css">	

</head>
<body>

	<form action="registar.php" method="post"  >
		<fieldset>
			<div class="container" id="formulario">
			<div class="panel panel-primary"> 
			<div class="panel-heading text-center">
			<legend>Formulario</legend>
			<input class="controls" type="text" name="cedula" id="cedula" placeholder="Ingrese su cedula">
			<input class="controls" type="text" name="nombre" id="nombre" placeholder="Ingrese su nombre">	
			<input class="controls"	type="text" name="direccion"id="apellido" placeholder="Ingrese su direccion">	
			<input class="controls"	type="text" name="telefono"id="direccion" placeholder="Ingrese su telefono">		
			<input class="controls"	type="text" name="clave"id="clave" placeholder="Ingrese su clave">	
			<div class="panel-heading">		
		<p> Estoy de acuerdo con <a href="#"> Terminos y condiciones</a> </p>
		<button class="btn btn-success"> registar</button>
		<button class="btn btn-info"> verificar</button>
		
		<p><a href="#"> ¿ya tengo cuenta</a></p>
			
			</div>
			</div>
			</div> 
			</div>
			</div>
		</fieldset>
	</form>

</body>
</html>
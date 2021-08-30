<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="js/thumbelina.js"></script>
	<link rel="stylesheet" type="text/css" href="js/thumbelina.css">
	<title>Pagina de inicio</title>
	
</head>
<style type="text/css">
	
	#contenedor1{
		float: left;
		background-color: skyblue;
		width: 400px;
		height: 400px;
	}
	#contenedor2{
		float: left;
background-color: green;
		width: 800px;
		height: 400px;
	}
	#slider{
	position: relative;
	margin-left: 20px;
	height: 120px;
	width: 256px;
	border-top: 1px solid #aaa;
	border-bottom: 1px solid #aaa;
}
</style>
<script type="text/javascript">
///// slider
	$(function() {
		$('#slider').Thumbelina({
			$bwdBut:$('#slider .left'),
			$fwdBut:$('#slider .right')
		});
	});
///// contenido interno del slider
		function Imagen(img) {
			if (img.id=="1") {
			document.getElementById("caja").src="productos/cocaCola.png";
			document.getElementById("nombre").value="Coca Cola";
			document.getElementById("valor").value="$1.50";
			}
			if (img.id=="2") {
			document.getElementById("caja").src="productos/fanta.png";	
			document.getElementById("nombre").value="Fanta";
			document.getElementById("valor").value="$1.10";
			}
			if (img.id=="3") {
			document.getElementById("caja").src="productos/incaKola.png";
			document.getElementById("nombre").value="Inca Kola";
			document.getElementById("valor").value="$0.75";	
			}
			if (img.id=="4") {
			document.getElementById("caja").src="productos/nestea.png";	
			document.getElementById("nombre").value="Nestea";
			document.getElementById("valor").value="$1.30";
			}
			if (img.id=="5") {
			document.getElementById("caja").src="productos/pepsi.png";	
			document.getElementById("nombre").value="Pepsi Cola";
			document.getElementById("valor").value="$1.00";
			}
			if (img.id=="6") {
			document.getElementById("caja").src="productos/sprite.png";	
			document.getElementById("nombre").value="Sprite";
			document.getElementById("valor").value="$1.25";
			}
		}


</script>

<body>
<div id="contenedor1">
	<div id="slider">
		<div class="thumbelina-but horiz left">&#706</div>
		<ul>
		<li><img id="1" src="productos/cocaCola.png" onclick="Imagen(this)" style="width: 110px; height: 110px;" > </li>
		<li><img id="2" src="productos/fanta.png"  onclick="Imagen(this)" style="width: 110px; height: 110px;" > </li>
		<li><img id="3" src="productos/incaKola.png" onclick="Imagen(this)" style="width: 110px; height: 110px;" > </li>
		<li><img id="4" src="productos/nestea.png" onclick="Imagen(this)" style="width: 110px; height: 110px;" > </li>
		<li><img id="5" src="productos/pepsi.png" onclick="Imagen(this)" style="width: 110px; height: 110px;" > </li>
		<li><img id="6" src="productos/sprite.png" onclick="Imagen(this)" style="width: 110px; height: 110px;" > </li>
		</ul>
		<div class="thumbelina-but horiz right">&#707</div>
	</div>
	
</div>
<div id="contenedor2">
<img src="" id="caja" style="width: 200px; height: 200px;">
<table border="1">
	<tr>
		<td> <input type="text" id="nombre"></td>
		<td><input type="text" id="valor"></td>
		<td></td>
	</tr>
</table>
</div>
</body>
</html>
<html>
<head>

	<meta charset="utf8"/>
	<title>ejemplo</title>

	<link href="fonts/Lowvetica/css/lowvetica.min.css" media="screen, projection" rel="stylesheet" type="text/css" />

	<link href="stylesheets/screen.css" media="screen, projection" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="js/Vendor/JQuery/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>

</head>

<body>

	<div class="page">
		
		<div class="header">
			<h1 class="title"> Pagina tuanis con contenido a cachete </h1>
		</div>

		<div class="content">

			<div class="form-wrapper">
				<form id="formulario" method="POST" action="index.php">

					<label for="txtNombre">Nombre</label>
					<input type="text" id="txtNombre" name="txtNombre" class="form-entry" />

					<br class="clear-float">

					<label for="txtCorreo">Correo</label>
					<input type="email" id="txtCorreo" name="txtCorreo" class="form-entry" />

					<br class="clear-float">

					<label for="slProvincia">Provincia</label>
					<select id="slProvincia" class="form-entry">
						<option value="0">seleccionar</option>
						<option value="1">Puntarenas</option>
						<option value="2">San Jose</option>
						<option value="3">Cartago</option>
						<option value="4">Alajuela</option>
						<option value="5">Heredia</option>
					</select>

					<br class="clear-float">

					<label for="slCanton">Cantón</label>
					<select id="slCanton" name="slCanton" class="form-entry">
					</select>

					<br class="clear-float">



					<button type="button" id="btnGuardar" name="btnGuardar" class="boton">Guardar</button>

				</form>
			</div>

		</div>


	</div>

</body>


</html>
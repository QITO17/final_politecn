<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ingresar</title>
	<link rel="stylesheet" href="../css/formulario.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
	<script src="../js/JavaScrpt.js"></script>
</head>

<body>
	<form method="post" action="../php/crear.php" enctype="multipart/form-data">
		<fieldset>
			<legend>Ingresar Producto</legend>



			
			<label for="nombre">Nombre</label>
			<div><input type="text" name="nombre" /></div>
			<label for="descripcion">Descripcion</label>
			<div><input type="text" name="descripcion" /></div>

			<label for="pre_com">Precio</label>
			<div><input type="number" name="pre_ven" /></div>

			<label for="Imagen">Imagen</label>
			<input name="image" type="file" />
			<input type="submit" value="Enviar" name="enviar" />
		</fieldset>
	</form>



	<form method="post" action="../php/Eliminar.php">
		<fieldset>
			<legend>Eliminar Producto</legend>
			<input type="number" name="id" class="campoid" />
			<input type="submit" value="Eliminar" />
		</fieldset>
	</form>




	

	<form method="post" action="./Modificar.php" enctype="multipart/form-data">
		<fieldset>
			<legend>Actualizar Producto</legend>

			<label for="ID">ID</label>
			<div><input type="text" name="ID" /></div>
			
			<label for="nombre">Nombre</label>
			<div><input type="text" name="nombre" /></div>

			<label for="descripcion">Descripcion</label>
			<div><input type="text" name="descripcion" /></div>

			<label for="pre_com">Precio</label>
			<div><input type="number" name="pre_ven" /></div>

			<label for="Imagen">Imagen</label>
			<input name="image" type="file" />

			<input type="submit" value="Enviar" name="enviar" />

			
			
		</fieldset>
	</form>


</body>

</html>
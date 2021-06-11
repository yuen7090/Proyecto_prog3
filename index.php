<!DOCTYPE html>
<html>
<head>
	<title>Registrar paises</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <form method="post">
    	<h1>¡Ingrese datos!</h1>
    	<input type="text" name="name" placeholder="Nombre completo">
    	<input type="text" name="codigo_dane" placeholder="codigo_dane">
        <input type="text" name="tipo_gobierno" placeholder="tipo_gobierno">
        <input type="text" name="num_poblacion" placeholder="num_poblacion">
        <input type="text" name="moneda" placeholder="moneda">
        <input type="text" name="num_departamentos" placeholder="num_departamentos">
        <input type="text" name="sector_economico" placeholder="sector_economico">
    	<input type="submit" name="Guardar">
    </form>
        <?php 
        include("registrar.php");
        ?>
</body>
</html> 
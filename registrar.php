<?php 

include("con_bd.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['codigo_dane']) >= 1 && strlen($_POST['tipo_gobierno']) >= 1 && strlen($_POST['num_poblacion']) >= 1 && strlen($_POST['moneda']) >= 1 && strlen($_POST['num_departamentos']) >= 1 && strlen($_POST['sector_economico']) >= 1) {
	    $name = trim($_POST['name']);
	    $codigo_dane = trim($_POST['codigo_dane']);
	    $tipo_gobierno = trim($_POST['tipo_gobierno']);
	    $num_poblacion = trim($_POST['num_poblacion']);
	    $moneda = trim($_POST['moneda']);
	    $num_departamentos = trim($_POST['num_departamentos']);
	    $sector_economico = trim($_POST['sector_economico']);
	    
	    $consulta = "INSERT INTO paises(nombre, codigo_dane, tipo_gobierno, num_poblacion, moneda, num_departamentos, sector_economico) VALUES ('$name', '$codigo_dane', '$tipo_gobierno', '&num_poblacion', '$moneda', '$num_departamentos', '$sector_economico')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?> 
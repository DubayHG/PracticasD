<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<title>Registro</title>
	<style type="text/css">
		body {margin: 20px; 
		background-color: #fdb4bf;
		font-family: Verdana, Helvetica, sans-serif;
		font-size: 90%;}
		h1 {color: #0833a2;
		border-bottom: 1px solid #005825;}
	</style>
</head>

<body>
<?php
$age = $_POST['edad'];
$sex = $_POST['sexo'];

if (!empty($age)&&!empty($sex)){
    if($sex == 'Femenino' || $sex == 'femenino' || $sex == 'FEMENINO' || $sex == 'F' || $sex == 'f'){
		if($age >= 18 && $age <= 35){
			echo "<h1>Bienvenida :)</h1> <strong>Cumple con el genero solicitado y se encuentra en el rango de edad permitido.</strong>";
		}else{
			echo "<h1>Error :(</h1> <strong>Usted cumple el genero solicitado pero NO se encuentra en el rango de edad permitido.</strong>";
		}
	}elseif($sex == 'Masculino' || $sex == 'masculino' || $sex == 'Masculino' || $sex == 'M' || $sex == 'm'){
		echo "<h1>Error :(</h1> <strong>El registro no esta permitido para hombres</strong>";
	}else{
		echo "<h1>Error :(</h1> <strong>Los datos ingresados son incorrectos, intentelo nuevamente</strong>";
	}
}else{
	echo "<h1>Error :(</h1> <strong>Los campos están vacios o incompletos, intentelo de nuevo</strong>";
}
?>
</body>
</html>
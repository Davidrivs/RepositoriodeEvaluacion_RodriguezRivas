<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php


$empleados = [
    ["nombre" => "Cesar", "sueldo" => 1500],

    ["nombre" => "Ana", "sueldo" => 2000],

    ["nombre" => "Jose", "sueldo" => 1200],

    ["nombre" => "Manuel", "sueldo" => 1800],

    ["nombre" => "Jorge", "sueldo" => 1600],
];

array_push($empleados, ["nombre" => "Tyrone", "sueldo" => 2200]);
array_push($empleados, ["nombre" => "Linda", "sueldo" => 1700]);
usort($empleados, function ($a, $b) {
	
    return $a['sueldo'] - $b['sueldo'];
});
foreach ($empleados as $empleado) {
    echo "La calificación de {$empleado['nombre']} es {$empleado['sueldo']}<br>";
}
?>

</body>
</html>
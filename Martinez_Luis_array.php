<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php
// Arreglo inicial de 5 carros con sus precios
        $carros = [
            "Toyota" => 20000,
            "Honda" => 18000,
            "Ford" => 25000,
            "Chevrolet" => 22000,
            "BMW" => 40000
        ];

        // Imprimir el arreglo inicial
        echo "Carros Iniciales <br>";
        foreach ($carros as $marca => $precio) {
            echo "$marca: $$precio <br>";
        }

        // Agregar 2 carros más de forma manual (asociativo)
        $carros["Nissan"] = 23000;
        $carros["Mercedes"] = 45000;

        // Ordenar el arreglo por precio (valores)
        asort($carros);

        // Imprimir el arreglo después de agregar y ordenar
        echo "Carros después de agregar y ordenar <br>";
        foreach ($carros as $marca => $precio) {
            echo "$marca: $$precio <br>";
        }


?>
</body>
</html>
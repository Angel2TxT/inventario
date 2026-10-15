<?php

require_once __DIR__ . '/../src/validaciones.php';

$casosNombre = [
    ["Teclado", true],
    ["", false],
    ["      ", false],
    ["Mouse", true],
];

$casosCantidad = [
    ["10", true],      
    ["0", true],      
    ["-5", false],     
    ["abc", false],    
];

$total = 0;
$aprobadas = 0;
$fallidas = 0;

echo "Pruebas de validarNombreProducto \n";
foreach ($casosNombre as [$entrada, $esperado]) {
    $total++;
    $obtenido = validarNombreProducto($entrada);

    if ($obtenido === $esperado) {
        $aprobadas++;
        echo "PASS\n";
    } else {
        $fallidas++;
        echo "FAIL\n";
    }
}

echo "\n Pruebas de validarCantidadProducto \n";
foreach ($casosCantidad as [$entrada, $esperado]) {
    $total++;
    $obtenido = validarCantidadProducto($entrada);

    if ($obtenido === $esperado) {
        $aprobadas++;
        echo "PASS\n";
    } else {
        $fallidas++;
        echo "FAIL\n";
    }
}

echo "\nPruebas realizadas: $total | Aprobadas: $aprobadas | Fallidas: $fallidas\n";

if ($fallidas > 0) {
    exit(1);
}
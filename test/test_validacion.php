<?php

require_once __DIR__ . '/../src/validaciones.php';

$casosNombre = [
    ["Nombre válido ('Teclado')", "Teclado", true],
    ["Nombre vacío ('')", "", false],
    ["Solo espacios ('      ')", "      ", false],
    ["Nombre válido ('Mouse')", "Mouse", true],
];

$casosCantidad = [
    ["Cantidad positiva válida ('10')", "10", true],
    ["Cantidad en cero límite ('0')", "0", true],
    ["Cantidad negativa ('-5')", "-5", false],
    ["Texto no numérico ('abc')", "abc", false],
];

$total = 0;
$aprobadas = 0;
$fallidas = 0;

echo "Pruebas de validarNombreProducto:\n";
foreach ($casosNombre as [$nombrePrueba, $entrada, $esperado]) {
    $total++;
    $obtenido = validarNombreProducto($entrada);

    if ($obtenido === $esperado) {
        $aprobadas++;
        echo "- $nombrePrueba: PASÓ\n";
    } else {
        $fallidas++;
        echo "- $nombrePrueba: FALLÓ\n";
    }
}

echo "\nPruebas de validarCantidadProducto:\n";
foreach ($casosCantidad as [$nombrePrueba, $entrada, $esperado]) {
    $total++;
    $obtenido = validarCantidadProducto($entrada);

    if ($obtenido === $esperado) {
        $aprobadas++;
        echo "- $nombrePrueba: PASÓ\n";
    } else {
        $fallidas++;
        echo "- $nombrePrueba: FALLÓ\n";
    }
}

echo "\nPruebas realizadas: $total | Aprobadas: $aprobadas | Fallidas: $fallidas\n";

if ($fallidas > 0) {
    exit(1);
}
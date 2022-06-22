<?php

$valor1 = 0;
$valor2 = 0;
$operador = 'somar';
$resultado = 0;

$valor1 = $_POST['valor1'];
$valor2 = $_POST['valor2'];

$operador = $_POST['operador'];

switch($operador){
    case 'SOMA':
        $resultado = $valor1+$valor2;
        break;
    case 'SUB':
        $resultado = $valor1-$valor2;
        break;
    case 'MULT':
        $resultado = $valor1 * $valor2;
        break;
    case 'DIV':
        $resultado = $valor1 / $valor2;
        break;
}

echo "O resultado de sua operação é: " . $resultado

?>
<?php
$altura = $_POST ['txtAltura'];
$base = $_POST ['txtBase'];
$triangulo = ($base * $altura) / 2;
echo "Área do triângulo: " . $triangulo;
echo "Esse foi o resultado final";
?>

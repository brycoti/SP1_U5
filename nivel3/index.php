<?php declare(strict_types=1);
include 'clase.php';

// Objetos
$triangulo1 = new Triangulo(30,15);
$rectangulo1 = new Rectangulo(12,4);
$circulo1 = new Circulo(4);



echo "El area del triangulo es " .  $triangulo1->area() . ".<br>";
echo "El area del rectangulo es " . $rectangulo1->area() . ".<br>";
echo "El area del circulo es " . $circulo1->area(). "<br>"; 


?>
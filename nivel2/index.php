<?php declare(strict_types=1);

abstract class Shape {
    // atributos, en este caso protected porque hay clases hijas
    protected float $anchura;
    protected float $altura;

    // Constructor
    public function __construct(float $anchura, float $altura) {
        $this->anchura = $anchura;
        $this->altura = $altura;
    }

    // metodo general abstracto, varia en las herencias
    abstract protected function area(): float;
}

// podemos acceder a los atributos protected de la clase padre con el $this->,
// Aqui area() es public para poder crear objetos afuera usando el  public __construct fuera de las clases
class Triangulo extends Shape {
    public function area(): float {
        return ($this->anchura * $this->altura) / 2;
    }
}

class Rectangulo extends Shape {
    public function area(): float {
        return $this->anchura * $this->altura;
    }
}

// Objetos
$triangulo1 = new Triangulo(30,15);
$rectangulo1 = new Rectangulo(12,4);

echo "El area del triangulo es " .  $triangulo1->area() . ".<br>";
echo "El area del rectangulo es " . $rectangulo1->area() . ".<br>";

?>
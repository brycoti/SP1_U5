<?php

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

class Circulo extends Shape {
    private float $radio;

    public function __construct(float $radio) {
        $this->radio = $radio;
    }
 
    public function area(): float {
        $radioAlCuadrado = $this->radio * $this->radio;
        $areaCirculo = pi() * $radioAlCuadrado;
        return round($areaCirculo, 2);
    }
}


?>
<?php
// Ejercicio 1

abstract class Animal {
    protected $nombre;
    public function __construct($nombre) {
        $this->nombre = $nombre;
    }


    abstract protected function makeSound();
    // este lo declaramos protegido para que solo puedan acceder y heredarlo sus clases hijas
    // en las clases hijas será publico porque lo invocamos fuera de éstas. 
}

class Perro extends Animal {
    public function makeSound()
    {
        echo  "Bup, bup! Mi amo me llama " . $this->nombre . "! <br>";
    }
}

class Gato extends Animal {
    public function makeSound()
    {
        echo "Meu! Mi amo me llama " . $this->nombre . "! <br>";
    }
}
// objetos 
$gato1 = new Gato("Félix");
$perro1 = new Perro("Firulais");
$minino = new Gato("Mimi");
$dog = new Perro("Pancho");

echo $gato1->makeSound();
echo $perro1->makeSound();
echo $minino->makeSound();
echo $dog->makeSound();


?>
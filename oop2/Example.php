<?php
trait GenoType{
    function blood(){
        return "The animal has blood and genotype AA.<br>";
    }
}

class Mammal
{
    function makeSound()
    {
        return "The animal says a sound.<br>";
    }
}


class Cat{
    use GenoType;
    private Mammal $animal;
    function __construct(Mammal $animal)
    {
        $this->animal = $animal;
    }
    public function eat(){
        echo "The cat is eating.<br>";
        echo $this->animal->makeSound();
        echo $this->blood();
    }
}
$animal = new Mammal();

$c = new Cat($animal);
$c->eat();
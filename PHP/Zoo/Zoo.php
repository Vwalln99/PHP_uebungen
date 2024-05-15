<?php

require_once 'Tiger.php';
require_once 'Loewe.php';
require_once 'Nashorn.php';

class Zoo
{
    public $animals = array();

    public function addAnimal($animal)
    {
        $this->animals[] = $animal;
    }
    public function feedAllAnimals()
    {
        foreach ($this->animals as $animal) {
            while ($animal->weight < $animal->minweight) {
                $animal->feed();
            }
        }
    }

    public function petAllAnimals()
    {
        foreach ($this->animals as $animal) {
            echo $animal->pet() . "<br>";
        }
    }

    public function allCatsRoar()
    {
        foreach ($this->animals as $animal) {
            if ($animal instanceof Raubkatze) {
                echo $animal->roar() . "<br>";
            }
        }
    }

    public function getAnimals()
    {
        return $this->animals;
    }
}

$zoo = new Zoo();
$zoo->addAnimal(new Nashorn("Hank", 0, 2000, 2500, false, 10));
$zoo->addAnimal(new Nashorn("Gloria", 0, 1800, 2000, true, 10));

$zoo->addAnimal(new Tiger("Shiro", 0, 450, 500, false, 10, 40));
$zoo->addAnimal(new Tiger("Kaya", 0, 375, 400, true, 10, 20));

$zoo->addAnimal(new Loewe("Simba", 0, 520, 600, false, 10, 50));
$zoo->addAnimal(new Loewe("Nala", 0, 420, 450, true, 10, 80));
$zoo->feedAllAnimals();

<?php
class Animal
{
    public $sound;
    public function __construct($sound)
    {
        $this->sound = $sound;
    }

    public function printSound()
    {
        echo $this->sound."<br>";
    }
}

$cat = new Animal("Meow");
$dog = new Animal("Gheu");
$mouse = new Animal("Squeak");

$animals = array($cat, $dog, $mouse);

foreach ($animals as $animal) {
    $animal->printSound();
}

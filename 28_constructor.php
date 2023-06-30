<?php

class Fruits {
    public $name;
    public $color;

    function __construct($fName = "default", $fColor = "default")
    {
        $this->name = $fName;
        $this->color = $fColor;

    }

    public function getName ()
    {
        return $this->name;
    }

    public function getColor ()
    {
        return $this->color;
    }

    public function sleep ()
    {
        echo "Good Night...";
    }
}

$apple = new Fruits('Apple', 'red');

// $callName = $apple->name;
// echo $callName."<br/>";

// $callColor = $apple->getColor();
// echo $callColor."<br/>";

class Animals extends Fruits
{
    public $name;
    public $size;

    function __construct($animalName, $animalSize)
    {
        $this->name = $animalName;
        $this->size = $animalSize;
    }

    public function greeting()
    {
        echo "Hello Animals";
    }
}

$animal = new Animals('dog', "small");

echo $animal->name . "<br/>";
echo $animal->size . "<br/>";

echo $animal->greeting()."<br/>";

echo $animal->sleep();


?>
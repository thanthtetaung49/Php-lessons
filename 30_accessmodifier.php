<?php

class Fruit
{
    public $name;
    private $color;
    protected $weight;
}

$apple = new Fruit();

$getName = $apple->name = "Apple";
echo $getName . "<br/>"; // apple

// $getColor = $apple->color = "Red";
// echo $getColor; // ERROR

// $getWeight = $apple->weight = "100kg";
// echo $getWeight; // ERROR

class Person
{
    public $personName;
    public $personAge;
    public $personLocation;

    public function getName($name)
    {
        return $this->personName = $name;
    }

    private function personAge($age)
    {
        return $this->personAge = $age;
    }

    protected function personLocation($location)
    {
        return $this->personLocation = $location;
    }
}

$user = new Person();

echo $user->getName("Kyaw Kyaw")."<br/>";

// echo $user->personAge("29");

// echo $user->personLocation("Yangon");

class Cats 
{
    public $name;
    public $color;
    public $size;

    function __construct($catName, $catColor, $catSize)
    {
        $this->name = $catName;
        $this->color = $catColor;
        $this->size = $catSize;
    }

    public function intro() {
        echo "cat name is {$this->name}, color is {$this->color} and size is {$this->size}";
    }
}

$catInfo = new Cats("Kit Kit", "grey", "medium");

echo $catInfo->name . "<br/>";
echo $catInfo->color . "<br/>";
echo $catInfo->size . "<br/>";

echo $catInfo->intro()."<br/>";

class Dog extends Cats
{
    public function dogIntro() {
        echo "Dog name is {$this->name}, color is {$this->color} and size is {$this->size}"."<br/>";
        echo $this->intro();
    }
}

$dogInfo = new Dog("candy", "white", "large");

echo $dogInfo->dogIntro()."<br/>";

?>
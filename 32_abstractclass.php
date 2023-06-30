<?php 

// Parent class

abstract class Car 
{
    public $name;
    
    public function __construct($name)
    {
        $this->name = $name;
    }

    abstract public function intro(): string;
}

// child class

class Audi extends Car
{
    public function intro(): string
    {
        return "Choose German quality! I'm an $this->name";
    }
}

class Volvo extends Car 
{
    public function intro(): string
    {
        return "Proud to be Swedish! I'm an $this->name";
    }
}

class Citroen extends Car 
{
    public function intro(): string
    {
        return "French extravagance! I'm a $this->name";
    }
}

$audi = new Audi("Audi");
echo $audi->intro();
echo "<br/>";

$volvo = new Volvo("Volvo");
echo $volvo->intro();
echo "<br/>";

$citroen = new Citroen("Citroen");
echo $citroen->intro();
echo "<br/>";

abstract class ParentClass 
{
    abstract public function prefixName($name);
}

class ChildClass extends ParentClass
{
    public function prefixName($name)
    {
        if ($name == "John Doe") {
            $prefix = "Mr.";
        } elseif ($name == "Jane Doe") {
            $prefix = "Mrs.";
        } else {
            $prefix = "";
        }

        return "{$prefix} {$name}";
    }
}

$class = new ChildClass();
echo $class->prefixName("John Doe");
echo "<br/>";

$class = new ChildClass();
echo $class->prefixName("Jane Doe");
echo "<br/>";

abstract class Person 
{
    abstract public function gender($name);
}

class PersonGender extends Person
{
    public function gender($name, $separator = "=>") 
    {
        if ($name == "Jhone Snow") {
            $gender = "male";
        } elseif ($name == "Snow") {
            $gender = "female";
        } else {
            $gender = "";
        }

        return "{$name} {$separator} {$gender}";
    }
}

$personGender = new PersonGender();
echo $personGender->gender("Jhone Snow");
echo "<br/>";

echo $personGender->gender("Snow");
echo "<br/>";

?>
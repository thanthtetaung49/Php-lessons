<?php 
class Greeting 
{
    const greetingMessage = "Hello PHP";
}

echo Greeting::greetingMessage."<br/>";

class GoodBye 
{
    const goodbyeMessage = "I don't wanna say goodbye.";
    public function message() {
        return self::goodbyeMessage;
    }
}

$words = new GoodBye();

echo $words->message();

class Animal
{
    const animalName = "Kit Kit";

    public function getName()
    {
        return self::animalName;
    }
}

$callAnimal = new Animal();

echo $callAnimal->getName();

?>
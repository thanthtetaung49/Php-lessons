<?php

class Fruits
{
    public $name;
    public $color;

    function __construct($fruitName, $fruitColor)
    {
        $this->name = $fruitName;
        $this->color = $fruitColor;
    }

    function __destruct()
    {
        echo "Fruit name is {$this->name} and color is {$this->color}.<br/>";
    }
}

$apple = new Fruits('Apple', 'red');

class Vegetables extends Fruits
{
    public $vegetableName;

    function __construct($vegName, $vegColor)
    {
        $this->vegetableName = $vegName;
        $this->color = $vegColor;
    }

    function __destruct()
    {
        echo "Vegetable name is {$this->vegetableName} and color is {$this->color}.<br/>";
    }
}

$tomato = new Vegetables('Tomato', 'red');

?>
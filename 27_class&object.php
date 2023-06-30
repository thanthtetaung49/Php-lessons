<?php

class Person
{
    // properties
    public $name = "Micheal";
    public $age = "20";
    public $addr;
    public $edu;
    private $relationship;

    // method

    public function userAddress($address)
    { // void function
        $this->addr = $address;
        echo $this->addr;
    }

    public function userEduction($education = "default")
    { // type function
        $this->edu = $education;
        return $this->edu;
    }

    public function getRelationship()
    {
        return $this->relationship;
    }

    public function userRelationship($rs = "default")
    {
        $this->relationship = $rs;
    }
}

$user = new Person();

echo $user->name . "<br/>";
echo $user->age . "<br/>";

$user->userAddress("mandalay");

$outputEdu = $user->userEduction("passed matriculation grade");
echo $outputEdu . "<br/>";

$user->userRelationship('in a relationship');
$outputRs = $user->getRelationship();
echo $outputRs;

?>
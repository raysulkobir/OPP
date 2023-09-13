<?php

class Human
{
    public $name;
    public $age;

    function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }
    function sayName()
    {
        echo "My name is {$this->name} and age is {$this->age}";
    }
}

// object 1
$h1 = new Human("Md.Kamal", 20);
$h1->sayName();

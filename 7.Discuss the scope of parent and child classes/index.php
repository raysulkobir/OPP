<?php

class ParentClass
{
    protected $name;

    function sayHi()
    {
        echo "thi is a parent class \n";
    }

    function hello(){
        echo "I am hello function \n";
    }
}

class childClass extends ParentClass
{
    protected $name;

    function sayHi()
    {
        // parent::sayHi();
        parent::hello();
        echo "This is a child class \n";
    }
}

$cc = new childClass();
$cc->sayHi();

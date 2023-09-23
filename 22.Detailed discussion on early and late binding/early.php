<?php

// 1. Early Binding (Static Binding):
// Early binding, also referred to as static binding, is the default method resolution mechanism in PHP. In early binding, the decision about which method to call is made at compile time, which means it's determined based on the class where the method call is made.

// Here's a basic example to illustrate early binding:

class ParentClass
{
    public function showInfo()
    {
        echo "This is the parent class.";
    }
}

class ChildClass extends ParentClass
{
    public function showInfo()
    {
        echo "This is the child class.";
    }
}

$object = new ChildClass();
$object->showInfo(); // Outputs: "This is the child class."

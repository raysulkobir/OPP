<?php

    class Human{
        public $name;

        function sayName(){
            echo "My Name is: {$this->name} \n";
        }
    }

    // object 1
    $h1 = new Human();
    $h1->name = "Md.Raysul kobir";
    $h1->sayName();

    // object 2
    $h2 = new Human();
    $h2->name = "Sajid";
    $h2->sayName();

    // property name access 
    echo $h2->name;
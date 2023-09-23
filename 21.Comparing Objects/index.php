<?php

    class Person{
        public $name;

        public function __construct($name){
            $this->name = $name;
        }
    }

    $p1 = new Person('Md.Raysul');
    $p2 = new Person('raysul');
    $p3 = new Person('Md.Raysul');
    $p4 = $p1;

    if($p1 === $p1){
        echo "same object";
    }else{
        echo "not same object";
    }
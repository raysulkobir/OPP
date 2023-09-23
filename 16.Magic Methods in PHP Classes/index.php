<?php

// class Student
// {
//     public $name;
//     public $age;

//     public function __construct($name = null, $age = null)
//     {
//         $this->name = $name;
//         $this->age = $age;
//     }

//     public function getName(){
//         return $this->name;
//     }
//     public function setName($name){
//         $this->name = $name;
//     }

// }


//! exam -2

class Student
{
    public $name;
    public $age;
    public function __get($prop)
    {
        return $this->$prop;
    }

    public function __set($prop, $value)
    {

        $this->$prop = $value;
    }
}


$foo = new Student();

$foo->name = 'test';
echo $foo->name;

<?php

class Person
{
    public $name;
    public $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function __clone()
    {
        // Perform custom cloning actions
        $this->name = 'Clone of ' . $this->name;
        $this->age += 1;
    }
}


$p1 = new Person('Md.Raysul', 25);
echo $p1->name.'\n';
$p2 = clone $p1;
$p2->name = 'Kobir';
echo $p2->name;
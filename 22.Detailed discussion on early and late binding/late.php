<?php
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

    public function getShoInfo()
    {
        parent::showInfo(); // Late binding using parent::showInfo()
    }
}

$object = new ChildClass();
$object->getShoInfo(); // Outputs: "This is the parent class."

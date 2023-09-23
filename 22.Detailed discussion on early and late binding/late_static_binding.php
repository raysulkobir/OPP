<?php

class ParentClass
{

    public static function callParent()
    {
        static::showInfo(); // Late static binding using static::showInfo()
    }

    public static function showInfo()
    {
        echo "This is the parent class.";
    }
}

class ChildClass extends ParentClass
{
    public static function showInfo()
    {
        echo "This is the child class.";
    }

    
}

ChildClass::callParent(); // Outputs: "This is the child class."

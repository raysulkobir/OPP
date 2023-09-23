<?php

class MyClass
{
    const CITY = "Dhaka";
    function sayHi()
    {
        echo "Hi From " . self::CITY;
    }
}

$myClass = new MyClass();
$myClass->sayHi();

// echo $myClass::CITY;

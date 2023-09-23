<?php

class A
{
    public static function sayHi()
    {
        echo "Hi From A";
    }
}

class B extends A
{
    private static $name;
    public static function sayHi()
    {
        echo self::$name = "Md.Raysul kobir \n";       echo "Hi From B \n";
        parent::sayHi();
    }
}

$b = new B();
$b->sayHi();
// B::$name;

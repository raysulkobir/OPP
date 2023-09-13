<?php


interface BaseAnimal
{
    function isActive();
    function canEat();
    function breed();
}



class Animal implements BaseAnimal{
    function isActive(){ 
        echo "This is a isActive";
    }

    function canEat(){
        echo "This is a isActive";
     }

    function breed(){
        echo "This is a isActive";
    }
}

interface BaseHuman extends BaseAnimal
{
    function canTalk();
}
class Human implements BaseHuman{
    function isActive()
    {
        echo "This is a isActive";
    }

    function canEat()
    {
        echo "This is a isActive";
    }

    function breed()
    {
        echo "This is a isActive";
    }

    function canTalk(){
        echo "hello world";
    }
}


$h = new Human();
echo $h instanceof BaseHuman;


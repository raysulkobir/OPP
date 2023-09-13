<?php
    abstract class OurClass{
        final function doSomething(){
            echo "Doing something";
        }
    }

    class myClass extends OurClass{
       
    }   

    $m = new MyClass();
    $m->doSomething();
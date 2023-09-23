<?php

    class A{
        public static function sayHi(){
            echo "Hi From A";
        }
    }

    class B extends A{
        public static function sayHi(){
            echo "Hi From B \n";
            parent::sayHi();
        }
    }

    $b = new B();
    $b->sayHi();
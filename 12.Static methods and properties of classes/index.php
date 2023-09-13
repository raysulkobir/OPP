<?php
    class myClass{
        private $name = "Md.Raysul kobir";
        static $age = 20;
        static function one(){
            echo "this is a function one \n";
            echo self::$age;
        }

        static function something(){
            echo "this is something function";
        }

        function two(){
            $this->something();
        }
    }

    $my = new myClass();
    // $my->one();
    $my->two();
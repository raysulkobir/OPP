<?php

class MathOperations
{
    public function __call($method, $arguments)
    {
        if ($method === 'add') {
           return array_sum($arguments);
        } elseif ($method === 'multiply') {
            $result = 1;
            foreach ($arguments as $arg) {
                $result *= $arg;
            }
            return $result;
        } else {
            throw new \BadMethodCallException("Method {$method} does not exist.");
        }
    }

    public static function __callStatic($method, $arguments)
    {
        if ($method === 'subtract') {
            return $arguments[0] - $arguments[1];
        } else {
            throw new \BadMethodCallException("Static method {$method} does not exist.");
        }
    }
}

$math = new MathOperations();

// Calling the __call method for addition
echo $result1 = $math->add(2, 3, 4); // Returns 9

// Calling the __call method for multiplication
// echo $result2 = $math->multiply(2, 3, 4); // Returns 24

// Calling a non-existent method
// return $result3 = $math->subtract(10, 5); // Throws an exception

<?php

class DynamicObject
{
    private $data = [];

    // __get() magic method to get the value of a property
    public function __get($name)
    {
        if (isset($this->data[$name])) {
            return $this->data[$name];
        } else {
            return null; // Return null if the property doesn't exist
        }
    }

    // __set() magic method to set the value of a property
    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }

    // __isset() magic method to check if a property exists
    public function __isset($name)
    {
        return isset($this->data[$name]);
    }

    // __unset() magic method to unset a property
    public function __unset($name)
    {
        unset($this->data[$name]);
    }
}

// Create a DynamicObject
$object = new DynamicObject();

// Set properties dynamically
$object->name = "John";
$object->age = 30;

// Check if properties exist
if (isset($object->name)) {
    echo "Property 'name' exists. Value: " . $object->name . "\n";
} else {
    echo "Property 'name' does not exist.\n";
}

if (isset($object->gender)) {
    echo "Property 'gender' exists.\n";
} else {
    echo "Property 'gender' does not exist.\n";
}

// Unset a property
unset($object->age);

// Check if the property exists after unsetting
if (isset($object->age)) {
    echo "Property 'age' exists.\n";
} else {
    echo "Property 'age' does not exist.\n";
}

<?php

class Color{
    public $color;

    function __construct($color) {
        $this->color = $color;
    }

    function __toString() {
       return $this->color;
    }
}

$color = new Color('red');
echo $color;
<?php
    class RGB{
        private $color;
        private $red;
        private $green;
        private $blue;

        function __construct($color){
            $this->color = ltrim($color, '#');
            $this->parseColor();
        }

        function getColor(){
            return $this->color;
        }

        function setColor($color){
            $this->color = ltrim($color, '#');
            $this->parseColor();
        }

        private function parseColor(){
            if($this->color){
                list($this->red, $this->green, $this->blue) = sscanf($this->color, '%02x%02x%02x');
            }else{
                list($this->red, $this->green, $this->blue) = array(0, 0, 0);
            }
        }

        function getRGBColor(){
            echo "Red $this->red; Green $this->green; Blue $this->blue";
        }
    }

    $myColor = new RGB("#ffccdd");
    $myColor->getRGBColor();
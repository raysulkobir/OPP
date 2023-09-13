<?php
//   An abstract class is a mix between an interface and a class. It can be define functionality as well as interface.

//     Classes extending an abstract class must implement all of the abstract methods defined in the abstract class.
//     An abstract class is declared the same way as classes with the addition of the 'abstract' keyword.
//     <hr>

//     Abstract Class & Method কি?<br>

//     1) Abstract Class হচ্ছে এক ধরনের Class যার কোনো object তৈরী করা যায় না কিন্তু Class গুলো কে inherit করা যায় । কোনো Class কে abstract ঘোষণা করতে হলে class keyword এর আগে abstract keyword টি দিতে হয়। যেমন- abstract class className{....}। Inherit করা জন্য extends keyword ব্যবহার করে । <br>

//     2) Abstract Class এ abstract এবং Non-Abstract দুই ধরনের method declare করা যায় ।<br>

//     3) Abstract Class এ abstract method declare করা থাকে তবে body তে কোনো code define করা থাকে না কিন্তু Non-Abstract method এর body তে code define করা যায় । কোনো Method কে abstract ঘোষণা করতে হলে function keyword এর সামনে abstract keyword টি দিতে হয়।যেমন- abstract function functionName() : string;<br>

//     4) Abstract Method গুলোকে সম সংখ্যক Parameter সহ child class এ অবশ্যই implement করতে হবে।<br>
// 5) Abstract class এ private declare করা যায় না ।<br>


abstract class Shape
{
    abstract public function area();
}

class Circle extends Shape
{
    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function area()
    {
        return "Circle: " . 3.14 * $this->radius * $this->radius;
    }
}

class Rectangle extends Shape
{
    private $width;
    private $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function area()
    {
        return "Rectangle " . $this->width * $this->height;
    }
}

// $circle = new Circle(10);
// echo $circle->area();

// Rectangle
$rectangle = new Rectangle(40, 250);
echo $rectangle->area();